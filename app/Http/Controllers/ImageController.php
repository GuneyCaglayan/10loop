<?php

namespace App\Http\Controllers;

use App\Image;
use App\Product;
use DB;
use Illuminate\Http\Request;

class ImageController extends Controller
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
    public function create(Product $products)
    {
        $products = DB::table('products')
                ->get();
        
        return view('image', [
            'products' => $products
        ]);
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
            'productId' => 'required',
            'image' => 'required',
            'extension' => 'required',
        ]);

        if($request->hasFile('image'))
        {
            $var = $request->file('image');
            $name = $request->input('name');
            $var->move(\public_path('/productImage'), $name . '.' . $var->getClientOriginalExtension());
        }

        Image::create($data);
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image  $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image  $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image  $images)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image  $image)
    {
        $image->delete();
        return \redirect('/home');
    }
}
