<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController2 extends Controller
{
    public function index()
    {
        $data = Product::get();
        return view('0905a.home', compact('data'));
    }
    
    public function getProducts(){
        $data = Product::get();
        return view('0905a.products', compact('data'));
    }

    public function login()
    {
        return view('0905a.login');
    }

    public function registration()
    {
        return view('0905a.registration');
    }
}
