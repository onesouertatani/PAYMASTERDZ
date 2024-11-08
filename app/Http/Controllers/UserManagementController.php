<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Session;
use Carbon\Carbon;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use App\Rules\MatchOldPassword;


class UserManagementController extends Controller
{
    // index page
    public function index()
    {
        $users = User::all();
        return view('usermanagement.list_users',compact('users'));
    }
 /** profile user */
 public function userProfile($id)
 {
    $users = User::where('user_id',$id)->first();
    return view('usermanagement.user_profile',compact('users'));
 }
    /** user view */
    public function userView($id)
    {
        $users = User::where('user_id',$id)->first();
        return view('usermanagement.user_update',compact('users'));
    }
        /** teacher Grid */
        public function userGrid()
        {
            $userGrid = User::all();
            return view('usermanagement.user_grid',compact('userGrid'));
        }
   // activity log
   public function activityLogInLogOut()
   {
       $activityLog = DB::table('activity_logs')->get();
       return view('usermanagement.activity',compact('activityLog'));
   }
    /** user Update */
    public function userUpdate(Request $request)
    {
        DB::beginTransaction();
        try {
            if (Session::get('role_name') === 'Admin' || Session::get('role_name') === 'Super Admin')
            {
                $user_id       = $request->user_id;
                $name         = $request->name;
                $email        = $request->email;
                $role_name    = $request->role_name;
                $position     = $request->position;
                $phone        = $request->phone_number;
                $department   = $request->department;
                $status       = $request->status;

                $image_name = $request->hidden_avatar;
                $image = $request->file('avatar');

                if($image_name =='photo_defaults.jpg') {
                    if ($image != '') {
                        $image_name = rand() . '.' . $image->getClientOriginalExtension();
                        $image->move(public_path('/images/'), $image_name);
                    }
                } else {
                    
                    if($image != '') {
                        unlink('images/'.$image_name);
                        $image_name = rand() . '.' . $image->getClientOriginalExtension();
                        $image->move(public_path('/images/'), $image_name);
                    }
                }
            
                $update = [
                    'user_id'      => $user_id,
                    'name'         => $name,
                    'role_name'    => $role_name,
                    'email'        => $email,
                    'position'     => $position,
                    'phone_number' => $phone,
                    'department'   => $department,
                    'status'       => $status,
                    'avatar'       => $image_name,
                ];

                User::where('user_id',$request->user_id)->update($update);
            } else {
            }
            DB::commit();
            return redirect()->back();

        } catch(\Exception $e){
            DB::rollback();
            return redirect()->back();
        }
    }

    /** user delete */
    public function userDelete(Request $request)
    {
        DB::beginTransaction();
        try {
            if (Session::get('role_name') === 'Admin' || Session::get('role_name') === 'Super Admin')
            {
                
                    User::destroy($request->user_id);
                
            } else {
            }

            DB::commit();
            return redirect()->back();
    
        } catch(\Exception $e) {
            DB::rollback();
            return redirect()->back();
        }
    }

    /** change password */
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password'     => ['required', new MatchOldPassword],
            'new_password'         => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        DB::commit();
        return redirect()->back();
    }
    public function register()
    {
        $role = DB::table('role_type_users')->get();
        return view('usermanagement.newregister',compact('role'));
    }
    public function storeUser(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            'role_name' => 'required|string|max:255',
            'password'  => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);

        $dt       = Carbon::now();
        $todayDate = $dt->toDayDateTimeString();
        if($request->role_name =='Student') {
        Student::create([
            'email'     => $request->email,
            
        ]);  }
        User::create([
            'user_id'      => $request->user_id,
            'name'      => $request->name,
            'avatar'    => $request->image,
            'email'     => $request->email,
            'join_date' => $todayDate,
            'role_name' => $request->role_name,
            'password'  => Hash::make($request->password),
        ]);
        return redirect()->back();
    }
}
