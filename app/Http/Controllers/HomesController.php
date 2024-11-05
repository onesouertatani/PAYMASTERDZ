<?php

namespace App\Http\Controllers;

 use DB;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Hash;
use App\Models\Partner;

use App\Models\Blog;
class HomesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('welcome');
    }
      

  public function partenaire()
    {
        $data = DB::table('partners')->get();
        return view('partenaire',compact('data'));
        
    }
      public function about()
    {
        
        return view('about');
    }
     public function blog()
    {
        $data = DB::table('blogs')->get();
        return view('blog',compact('data'));
        
    }
      public function contact()
    {
        
        return view('contact');
    }
     public function cms()
    {
        
        return view('cms');
    }
    public function faq()
    {
        
        return view('faq');
    }
     public function inscription()
    {
        
        return view('inscription');
    }
     public function Modepaiement()
    {
        
        return view('Modepaiement');
    }
     public function Systemepaiement()
    {
        
        return view('Systemepaiement');
    }
     public function widget()
    {
        
        return view('widget');
    }
     public function test()
    {
        
        return view('test');
    }
   public function SolutionCaisse()
    {
        
        return view('SolutionCaisse');
    }

    public function terminal()
    {
        
        return view('terminal');
    }
  
    	  
    public function webagent()
    {
        
        return view('webagent');
    } 
    
    public function RunPayServices()
    {
        
        return view('RunPayServices');
    } 
}
