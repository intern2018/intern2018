<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Provider;
use App\Purchase;
use App\req;
use DB;

class normaluserController extends Controller
{
    public function request()
    { 
        $items=Item::all();
        
        return view('normaluser/request')->with('items',$items);
    }
    public function requeststore(Request $request)
    { 
        $this->validate($request, [
            'itemName' => 'required',
            'quantity' => 'required',
            'unit' => 'required'
        ]);

        $req=new req;
        $req->userId=auth()->user()->id;
        $req->itemId=$request->input('itemName');
        $req->quantity=$request->input('quantity');
        $req->unit=$request->input('unit');
        $req->status='pending';
        $req->save();
        return redirect('/user')->with('success', 'request made');;
    }
}
