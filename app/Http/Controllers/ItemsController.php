<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Provider;
use App\Purchase;
use DB;

class ItemsController extends Controller
{
    public function index()
    {
        return view('storeemp/user');
    }

    public function registerItem()
    {
        return view('storeemp/registerItem');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'itemName' => 'required',
            'itemType' => 'required',
            'catagory' => 'required',
            'unit' => 'required'
        ]);

        //insert to DB
        $item = new Item;
        $item->itemQuantity = 0;
        $item->itemName = $request->input('itemName');
        $item->itemType = $request->input('itemType');
        $item->itemCatagory = $request->input('catagory');
        $item->itemUnit = $request->input('unit');
        $item->save();
        return redirect('/registerItem')->with('success', 'Item Registered');
    }

    public function registerProviderView()
    {
        return view('storeemp/registerProviderView');
    }

    public function registerProvider(Request $request)
    {
        $this->validate($request, [
            'providerName' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        //insert to DB
        $provider = new Provider;
        $provider->providerName = $request->input('providerName');
        $provider->address = $request->input('address');
        $provider->phoneNo = $request->input('phone');
        $provider->email = $request->input('email');
        $provider->save();
        return redirect('/registerProviderView')->with('success', 'Provider Registered');
    }

    public function insertItemView()
    {
        return view('storeemp/insertItemView');
    }

    public function insertItem(Request $request)
    {
        $this->validate($request, [
            'itemName' => 'required',
            'providerName' => 'required',
            'quantity' => 'required',
            'unitPrice' => 'required',
            'referenceNo' => 'required',
        ]);

        //insert to DB
        $item =DB::table('items')->where('itemId',$request->input('itemName'))->first();
        $item->itemQuantity += $request->input('quantity');
        DB::table('items')->where('itemId',$request->input('itemName'))->update(['itemQuantity'=>$item->itemQuantity]);

        $purchase =new Purchase;
        $purchase->providerId=$request->input('providerName');
        $purchase->itemId=$request->input('itemName');
        $purchase->userId=auth()->user()->id;
        $purchase->unitPrice=$request->input('unitPrice');
        $purchase->unit=$item->itemUnit;
        $purchase->quantity = $request->input('quantity');
        $purchase->referenceNo = $request->input('referenceNo');
        $purchase->save();

        return redirect('/insertItemView')->with('success', 'ITEM INSERTED');
    }

}

