<?php

namespace App\Http\Controllers;

use App\berita;
use App\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index(){
        $query = request('kategori');
        $kategori = kategori::all();
        $berita = berita::where('kategori_id', 'like', "%$query%")->orderBy('id','desc')->first();
        $topNews = berita::orderBy('id','desc')->limit(2)->get();
        $topNews2 = berita::where('kategori_id', 'like',"%$query%")->orderBy('id','desc')->limit(4)->get();
        $data=[
            'kategori'=>$kategori,
            'berita'=>$berita,
            'topNews'=>$topNews,
            'topNews2'=>$topNews2,
        ];
        return view('frontend.frontend',$data);
    }
    public function show($id)
    {
        $data=[
        'berita' => berita::where('slug',$id)->first(),
        "kategori" => kategori::all()
        // $topNews = topNews::where('id',$id)->first(),
        // $topNews2 = topNews2::where('id',$id)->first()
        ];

        return view('frontend.show',$data);
    }

}
