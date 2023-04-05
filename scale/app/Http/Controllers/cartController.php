<?php

namespace App\Http\Controllers;

use App\Models\cart as ModelsCart;
use App\View\Components\Cart;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function store(Request $request)
    {
        $isthere=ModelsCart::where('user_id',$request->user_id)->where('product_id',$request->product_id)->first();
        if(!$isthere){
            ModelsCart::create($request->all());
            return back()->with('success','product added sucessfully');
        }
        return back()->with('failed','product already there');
    }
}
