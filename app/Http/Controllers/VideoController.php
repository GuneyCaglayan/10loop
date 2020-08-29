<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use DB;

class VideoController extends Controller
{
    public function create(Video $videos)
    {
        $products = DB::table('products')
                ->get();
        
        return view('video', [
            'products' => $products
        ]);
    }

    public function store(Request $request)
    {
        $data = \request()->validate([
            'name' => 'required',
            'productId' => 'required',
            'video' => 'required',
        ]);

        Video::create($data);
        return redirect('/home');
    }

    public function destroy(video  $video)
    {
        $vieo->delete();
        return \redirect('/home');
    }
}
