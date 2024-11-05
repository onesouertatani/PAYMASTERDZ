<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Partner;
use App\Models\Staff;
use App\Models\Blog;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    /** home dashboard */
  
    public function index(Request $request)
    { $stafflist = DB::table('staff')->paginate(3);
         $staff = DB::table('staff')->count();
        $userscount = DB::table('users')->count();
        $blogs = DB::table('blogs')->count();
        $partner = DB::table('partners')->count();
        $users = User::select("*")
            ->whereNotNull('last_seen')
            ->orderBy('last_seen', 'DESC')
            ->paginate(100);
        $staffs = Staff::select("*")
            ->WHERE('sex','=','EN ATTENTE')
            ->count();
        return view('dashboard.home', compact('users','staff','userscount','blogs','partner','staffs','stafflist'));
    }
    /** profile user */
    public function userProfile()
    {
        return view('dashboard.profile');
    }

}
