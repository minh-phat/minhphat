<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Producer;

class ProductController extends Controller
{
    //
    public function index()
    {
        $data = Product::get();
        return  view('list' , compact ('data'));//compact ('data') use to display all data
    }
    public function add()
    {
        $data = Product::get();
        return view('add', compact ('data'));
    }
    public function save(Request $request)
    {
        //$request->validate is command  use to require user insert data 
      $request->validate([
        'id' => 'required', // id take from when customer insert data id
        'name' => 'required',
        'price' => 'required',
        'details' => 'required',
        'image1' => 'required',
        'producer' => 'required',
      ]);
        //dd($request->all()); // use to show into browser

        $product = new Product();

        $product->productID = $request->id;
        $product->productName = $request->name;
        $product->productPrice = $request->price;
        $product->productDetails = $request->details;
        $product->productImage1 = $request->image1;
        $product->producerID = $request->producer;

        $product->save(); // save() is command is used to save data into database 

        // return redirect()->back() is command bring the user back to previous page
        return redirect()->back()->with('success','Product added successfully!'); // ->with('success','Product added successfully!') command use to display add successfully       
    }
    public function edit($id){
      $data = Product::where('productID', '=',$id)-> first();
      return view('edit', compact('data'));
    }
    public function update(Request $request){
      $id =$request->id;
      Product::where('productID','=',$id)->update([
        'productName'=>$request->name,
        'productPrice' => $request->price,
        'productDetails' => $request->details,
        'productImage1' => $request->image1,
        'producerID'=> $request->producer,
      ]);
      return redirect()->back()->with('success','Product Update successfully');
      
    }
    public function delete($id)
    {
      Product::where('productID', '=',$id)->delete();
      return redirect()->back()->with('success','Product deleted successfully');    
    }
}
