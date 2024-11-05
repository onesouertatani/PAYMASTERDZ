<?php

namespace App\Http\Controllers;
use Auth;
use Session;
use DB;
use App\Models\Partner;
use Illuminate\Http\Request;
use Hash;
use Carbon\Carbon;

class PartnerController extends Controller
{
    /** index page partner list */
    public function partner()
    {
        $partnerList = Partner::all();
        return view('partner.partner',compact('partnerList'));
    }

    /** index page partner grid */
    public function partnerGrid()
    {
        $partnerList = Partner::all();
        return view('partner.partner-grid',compact('partnerList'));
    }

    /** partner add page */
    public function partnerAdd()
    {
        return view('partner.add-partner');
    }
    
        /** save record */
        public function partnerSave(Request $request)
        {
            $request->validate([
                'partner_id'       => 'required|string',
                'partner'     => 'required|mimes:jpeg,jpg,bmp,png',
              
            ]);
            $partner = $request->file('partner');
       
            if (isset($partner))
            {
                $currentDate = Carbon::now()->toDateString();
                $imagename = $currentDate .'-'. uniqid() .'.'. $partner->getClientOriginalExtension();
                if (!file_exists('Condidaa'))
                {
                    mkdir('Condidaa', 0777 , true);
                }
                $partner->move('Condidaa',$imagename);
            }else {
                $imagename = 'dafault.png';
            }
            try {
            
              
               
                     $partner = new Partner;
                    $partner->partner_id         = $request->partner_id;
                    $partner->partner   = $imagename;
                 
                    $partner->save();
          
    
               
                return redirect()->back();
            } catch(\Exception $e) {
                \Log::info($e);
                DB::rollback();
                return redirect()->back();
            }
        }

    /** view for edit partner */
    public function partnerEdit($id)
    {
        $partnerEdit = Partner::where('id',$id)->first();
        return view('partner.edit-partner',compact('partnerEdit'));
    }

    /** update record */
    public function partnerUpdate(Request $request)
    {
        DB::beginTransaction();
        
        try {

            $updateRecord = [
                'classe'     => $request->classe,
            ];
            Partner::where('id',$request->id)->update($updateRecord);
            
            DB::commit();
            return redirect()->back();
           
        } catch(\Exception $e) {
            DB::rollback();
            return redirect()->back();
        }
    }

   
    
      
   
    /** user delete */
    public function partnerDelete(Request $request)
    {
        DB::beginTransaction();
        try {
            if (Session::get('role_name') === 'Admin' || Session::get('role_name') === 'Super Admin')
            {
                
                    Partner::destroy($request->id);
                
            } else {
            }

            DB::commit();
            return redirect()->back();
    
        } catch(\Exception $e) {
            DB::rollback();
            return redirect()->back();
        }
    }
    public function viewDeletepartner($id)
    {
        $delete = Partner::find($id);
        $delete->delete();
        return redirect()->back();
    }

  
    
}
