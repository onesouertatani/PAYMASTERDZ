<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Blog;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Hash;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Department;
class BlogController extends Controller
{
    /** index page blog list */
    public function blog()
    {
        
        $blogList = Blog::all();
        return view('blog.blog',compact('blogList'));
    }

    public function status($id){

        $reservation = blog::find($id);
        $reservation->status = true;
        $reservation->save();
        
        return redirect()->back();

    }
    /** blog add page */
    public function blogAdd()
    {
        $blogadd = blog::all();
        return view('blog.add-blog',compact('blogadd'));
    }
    public function blogSave(Request $request)
    {
        $request->validate([
            'nom'       => 'required|string',
            'img' => 'required|mimes:jpeg,jpg,bmp,png',
            'ver' => 'required',
			'lien' => 'required',
			'description' => 'required',
        ]);

     

        $img = $request->file('img');
       
        if (isset($img))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $currentDate .'-'. uniqid() .'.'. $img->getClientOriginalExtension();
            if (!file_exists('Condidaa'))
            {
                mkdir('Condidaa', 0777 , true);
            }
            $img->move('Condidaa',$imagename);
        }else {
            $imagename = 'dafault.png';
        }
        
        try {
        
            $saveRecord = new blog;
         
            $saveRecord->nom         = $request->nom;
            $saveRecord ->img = $imagename;
            $saveRecord ->ver = $request->ver;
             $saveRecord ->lien = $request->lien;
              $saveRecord ->description = $request->description;
            $saveRecord->save();
   
            return redirect()->back();
        } catch(\Exception $e) {
            \Log::info($e);
            DB::rollback();
            return redirect()->back();
        }
    }

      


    /** view for edit blog */
    public function blogEdit($id)
    {
        $blogedit = blog::all();
        return view('blog.edit-blog',compact('blogedit'));
    }

    /** update record */
    public function blogUpdate(Request $request)
    {
        $blogedit = blog::all();
        return view('blog.edit-blog',compact('blogedit'));
    }

  /** blog delete */
  public function blogDelete(Request $request)
  {
      DB::beginTransaction();
      try {
        
              
          Blog::destroy($request->id);
              
         

          DB::commit();
          return redirect()->back();
  
      } catch(\Exception $e) {
          DB::rollback();
          return redirect()->back();
      }
  }
  public function viewDeleteBlog($id)
  {
      $delete = Blog::find($id);
      $delete->delete();
      return redirect()->back();
  }
 
}
