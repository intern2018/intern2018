<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class issuedController extends Controller
{
    public function index(){
        return view('normaluser.issued');
    }
}
