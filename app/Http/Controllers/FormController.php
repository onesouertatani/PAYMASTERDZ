<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\User;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageGoogle;
use Auth;
class FormController extends Controller
{
    // view form
    public function index()
    {
        return view('form.form');
      
    }

    // view record
    public function viewRecord()
    {if (Auth::user()->role_name=='Admin')
        {
        $data = DB::table('staff')->get();
        return view('view_record.viewrecord',compact('data'));
    }
        else
        {
            return redirect()->route('home');
        }
    }

    // view detail
    public function viewDetail($id)
    {if (Auth::user()->role_name=='Admin')
        {
        $data = DB::table('staff')->where('id',$id)->get();
        return view('view_record.viewdetail',compact('data'));
    }
        else
        {
            return redirect()->route('home');
        }
    }

    // view update
    public function viewUpdate(Request $request)
    {
        try{
            $id           = $request->id;
            $rec_id       = $request->rec_id;
            $fullName     = $request->fullName;
            $sex          = $request->sex;
            $emailAddress = $request->emailAddress;
            $phone_number = $request->phone_number;
            $position     = $request->position;
            $department   = $request->department;
            $salary       = $request->salary;

            $update = [

                'id'            => $id,
                'rec_id'        => $rec_id,
                'full_name'     => $fullName,
                'sex'           => $sex,
                'email_address' => $emailAddress,
                'phone_number'  => $phone_number,
                'position'      => $position,
                'department'    => $department,
                'salary'        => $salary,
            ];
            Staff::where('id',$request->id)->update($update);
                Mail::to($emailAddress)->bcc("paymaster@runpay.tn")
                        ->queue(new MessageGoogle($request->all()));
                        
            return redirect()->with('message','Data added Successfully');
        }catch(\Exception $e){

            return redirect()->route('form/view/detail');
        }
    }

    // save 

  /** save record */
  public function saveRecord(Request $request)
  {
      $request->validate([
          'fullName'     => 'required|string|max:255',
          'emailAddress' => 'required|string|email|max:255',
          'phone_number' => 'required|numeric|min:9',
          'position'     => 'required|string|max:255',
          'salary'       => 'required',
      ]);

      try {
      
        $Staff = new Staff;
        $Staff->full_name     = $request->fullName;
        $Staff->email_address = $request->emailAddress;
        $Staff->phone_number  = $request->phone_number;
        $Staff->position      = $request->position;
        $Staff->salary        = $request->salary;
        $Staff->save();
             
    

         
          return redirect()->back();
      } catch(\Exception $e) {
          \Log::info($e);
          DB::rollback();
          return redirect()->back();
      }
  }  /** partner add page */
  public function staffAdd()
  {
      return view('form.form');
  }

     /** save record */
     public function staffSave(Request $request)
     {
         $request->validate([
             'fullName'     => 'required|string|max:255',
             'emailAddress' => 'required|string|email|max:255',
             'phone_number' => 'required|numeric|min:9',
             'position'     => 'required|string|max:255',
             'salary'       => 'required',
           
         ]);
 
         try {
         
           
                
                 $Staff = new Staff;
                 $Staff->full_name     = $request->fullName;
                 $Staff->email_address = $request->emailAddress;
                 $Staff->phone_number  = $request->phone_number;
                 $Staff->position      = $request->position;
                 $Staff->salary        = $request->salary;
                 $Staff->save();
 
            
             return redirect()->back();
         } catch(\Exception $e) {
             \Log::info($e);
             DB::rollback();
             return redirect()->back();
         }
     }

    // view delete
  
     public function viewDelete($id)
    {
        $delete = Staff::find($id);
        $delete->delete();
        return redirect()->route('form/view/detail');
    }
}
