<?php

namespace App\Http\Controllers;

use App\berita;
use App\kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function create(){

        return view('kategori.create');
    }
    public function store(Request $request){
        $request->validate([
            'kategori'=>'required',
            'deskripsi'=>'required',
        ],[
            'kategori.required'=>'kategori tidak boleh kosong',
            'deskripsi.required'=>'deskripsi tidak boleh kosong',
        ]
    );
    DB::table('kategori')->insert(
        [
            'kategori'=>$request->kategori,
            'deskripsi'=>$request->deskripsi,
            'slug'=>str::slug($request->kategori),
        ]
        );
        return redirect()->to('/kategori');
    }
    public function index()
    {
        $kategori = DB::table('kategori')->get();
        return view('kategori.kategori',compact('kategori'));

    }
    public function show($id){
        $kategori =DB::table('kategori')->where('id',$id)->first();

        return view('kategori.show',compact('kategori'));
    }
    public function edit($id){
        $kategori =DB::table('kategori')->where('id',$id)->first();

        return view('kategori.edit',compact('kategori'));
    }
    public function update($id, Request $request){
        $request->validate([
            'kategori'=>'required',
            'deskripsi'=>'required',
        ],[
            'kategori.required'=>'kategori tidak boleh kosong',
            'deskripsi.required'=>'deskripsi tidak boleh kosong',
        ]);
        DB::table('kategori')->where('id',$id)->update([
            'kategori'=>$request['kategori'],
            'deskripsi'=>$request['deskripsi'],
        ]);
        return redirect('/kategori');
    }
    public function destroy($id){
        DB::table('kategori')->where('id',$id)->delete();

        return redirect('/kategori');
    }
    // public function kategori(kategori $kategori){
    //     return view('frontend.show_kategori',[
    //         'kategori'=>berita::orderBy('created_at','desc')->limit(5)->get(),
    //         'posts'=>$kategori->kategori()->latest()->simplePaginate(10),
    //         'kategori'=>kategori::get(),
    //     ]);
    // }
}
