<?php

namespace App\Http\Controllers;

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
            'slug'=>'required'
        ],[
            'kategori.required'=>'kategori tidak boleh kosong',
            'deskripsi.required'=>'deskripsi tidak boleh kosong',
            'slug.required'=>'slug tidak boleh kosong'
        ]
    );
    DB::table('kategori')->insert(
        [
            'kategori'=>$request['kategori'],
            'deskripsi'=>$request['deskripsi'],
            'slug'=>$request['slug'],

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
            'slug'=>'required'
        ],[
            'kategori.required'=>'kategori tidak boleh kosong',
            'deskripsi.required'=>'deskripsi tidak boleh kosong',
            'slug.required'=>'slug tidak boleh kosong'
        ]);
        DB::table('kategori')->where('id',$id)->update([
            'kategori'=>$request['kategori'],
            'deskripsi'=>$request['deskripsi'],
            'slug'=>$request['slug']
        ]);
        return redirect('/kategori');
    }
    public function destroy($id){
        DB::table('kategori')->where('id',$id)->delete();

        return redirect('/kategori');
    }
}
