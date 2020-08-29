<?php

namespace App\Http\Controllers;

use DB;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = \request()->validate([
            'categories' => 'required',
            'name' => 'required',
            'header' => 'required',
            'content' => 'required',
            'image' => 'required',
            'extension' => 'required',
        ]);

        if($request->hasFile('image'))
        {
            $var = $request->file('image');
            $name = $request->input('name');
            $var->move(\public_path('/product'), $name . '.' . $var->getClientOriginalExtension());
        }

        Product::create($data);
        return redirect('/home/product-add');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $products = DB::table('products')
                            ->get();

        return view('index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $products = DB::table('products')
                            ->get();

        return view('product-detail', [
            'products' => $products
        ]);
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
        $data = \request()->validate([
            'categories' => 'required',
            'name' => 'required',
            'header' => 'required',
            'content' => 'required',
        ]);

        $product->update($data);
        return redirect('home');
    }

            /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return \redirect('/home');
    }

    public function detail()
    {
        $products = DB::table('products')
                            ->get();

        return view('product-detail', [
            'products' => $products
        ]);
    }
}
