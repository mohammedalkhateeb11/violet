<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    
    public function index()
    {
        $latestProduct = Product::latest()->take(8)->get();
        return view('index',compact('latestProduct'));
    }
}
