<?php

namespace App\Http\Controllers;

use App\Http\Requests\createProduct;
use App\Http\Requests\updateProduct;
use App\Models\Product;
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
        $products = Product::all();
        return view('manage.car',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Product $product,createProduct $request)
    {
        $product->name = $request->name;
        $product->phone = $request->phone;
        $product->email = $request->email;
        $product->address = $request->address;
        $product->user_manage = $request->user_manage;
        $product->status = $request->status;
        $product->mdl = $request->mdl;
        $product->save();
        return  redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('manage.update',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(updateProduct $request,$id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->phone = $request->phone;
        $product->email = $request->email;
        $product->address = $request->address;
        $product->mdl = $request->mdl;
        $product->status = $request->status;
        $product->user_manage = $request->user_manage;
        $product->save();
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('index');
    }

    public function search(Request $request)
    {
        $products = Product::where('name','LIKE','%'.$request->search.'%')->get();
        return view('manage.car',compact('products'));
    }
}
