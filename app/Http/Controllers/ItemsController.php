<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use DB;

class ItemsController extends Controller
{
    public function index()
    {
        return view('storeemp/user');
    }

    public function insertItem()
    {
        return view('storeemp/insertItem');
    }

    public function registerItem(Request $request)
    {
        $this->validate($request, [
            'itemName' => 'required',
            'itemQuantity' => 'required',
            'itemType' => 'required',
            'catagory' => 'required',
            'unit' => 'required'
        ]);

        //insert to DB
        $item = new Item;
        $item->itemQuantity = $request->input('itemQuantity');
        $item->itemName = $request->input('itemName');
        $item->itemType = $request->input('itemType');
        $item->itemCatagory = $request->input('catagory');
        $item->itemUnit = $request->input('unit');
        $item->save();
        return redirect('/insertItem')->with('success', 'Item inserted');
    }
}
