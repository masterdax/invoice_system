<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productDetails = Product::all();
        return view('Product.ProductList',['productDetails'=>$productDetails]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

         $product = Product::all();
        return view('Product.ProductCreate',['product'=>$product]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        $this->validate($request,[
            'product_name' => 'required|unique:products',

        ]);
     //   $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        
        Product::create([
     //       'product_id' =>substr(str_shuffle($permitted_chars),0,5 ),
            'product_name'=> $request->product_name,
            'has_sac'  => $request->has_sac,

        ]);
        session()->flash('message','product inserted Successfully.');
        return redirect(route('product.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {
        $products = Product::find($product);
        return view('Product.ProductShow',['products' => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($product)
    {
        $productedit = Product::find($product);
        return view('Product.ProductEdit',compact('productedit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->Product_name = $request->product_name;
        $product->has_sac  = $request->has_sac;
        $product->save();
        session()->flash('message','product has been updated Successfully.');
        return redirect(route('product.index'));   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        $delete = Product::find($product);
        $delete->delete();
        session()->flash('message','Product has been deleted Successfully');
        return redirect(route('product.index'));

    }
}
