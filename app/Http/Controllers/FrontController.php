<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $products=Product::all();
        return view('front.home',compact('products'));
    }

    public function rings(){
        $categories=Category::all();
        $rings=Product::all()->where('category_id',1);
        return view('front.rings',compact(['rings','categories']));
    }

    public function necklace(){
        $categories=Category::all();
        $necklaces=Product::all()->where('category_id',3);
        return view('front.necklace',compact(['necklaces','categories']));
    }

    public function watches(){
        $categories=Category::all();
        $watches=Product::all()->where('category_id',2);
        return view('front.watches',compact(['watches','categories']));
    }

    public function reserve(){
        $products=Product::all();
        return view('front.reserve',compact('products'));
    }
}
