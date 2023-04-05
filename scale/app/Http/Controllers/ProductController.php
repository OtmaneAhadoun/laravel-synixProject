<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home()
    {
        return redirect('/');
    }
    public function index()
    {
        $user=User::find(auth()->id());
        $items=$user->cart;
        $product=Product::all();
        return view('home',compact('product','items'));
    }
    public function show(Product $product)
    {
        $productSimilaire=Product::all();
        return view('details',compact('product','productSimilaire'));
    }
    function add(Request $request){
        return view('add');
    }
    function store(Request $request){
        $data=$request->all();
        $data['mainImage']=$request->file('mainImage')->store("images","public");
        $data['image1']=$request->file('image1')->store("images","public");
        $data['image2']=$request->file('image2')->store("images","public");
        $data['image3']=$request->file('image3')->store("images","public");
        Product::create($data);
    }
}
