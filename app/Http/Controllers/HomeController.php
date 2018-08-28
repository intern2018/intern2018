<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $role = Auth::user()->role; 
    
        // Check user role
        switch ($role) {
            case 'user':
                return view('normaluser.user');
                break;
            case 'semployee':
                 return view('storeemp.user');
                break; 
            case 'shead':
                return view('storehead.user');
               break;
            case 'ihead':
               return view('immediatehead.user');
              break; 
            default:
                return view('normaluser.user'); 
                break;
        }
        
        return view('home');
    }
}
