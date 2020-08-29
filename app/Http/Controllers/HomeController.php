<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;
use App\Image;
use App\Video;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function showData(Product $products, Image $images, Video $videos)
    {
        $products = DB::table('products')
                            ->get();
        
        $images = DB::table('images')
                            ->get();

        $videos = DB::table('videos')
        ->get();

        return view('home', [
            'products' => $products,
            'images' => $images,
            'videos' => $videos
        ]);
    }
}
