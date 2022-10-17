<?php

namespace App\Http\Controllers;

use App\berita;
use App\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index(){
        $kategori = kategori::all();
        $berita = berita::orderBy('id','desc')->first();
        $topNews = berita::orderBy('id','desc')->limit(2)->get();
        $topNews2 = berita::orderBy('id','desc')->limit(4)->get();
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
        'berita' => berita::where('id',$id)->first(),
        "kategori" => kategori::all()
        // $topNews = topNews::where('id',$id)->first(),
        // $topNews2 = topNews2::where('id',$id)->first()
        ];

        return view('frontend.show',$data);
    }

}
