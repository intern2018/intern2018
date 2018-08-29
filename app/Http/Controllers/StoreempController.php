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
        return view('storeemp/insertItemView')->with('items',$items);
    }
}
