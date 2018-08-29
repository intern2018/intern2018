<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Provider;
use App\Purchase;
use DB;

class StoreempController extends Controller
{
    public function index()
    { 
        $items=Item::all();
        $provider=Provider::all();
        $data=array(
            'items'=> $items ,
            'provider'=> $provider
        );
        return view('storeemp/insertItemView')->with($data);
    }
}
