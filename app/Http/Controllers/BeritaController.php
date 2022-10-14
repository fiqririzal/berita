<?php

namespace App\Http\Controllers;

use App\berita;
use App\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        $berita = Berita::all();

        $data=[
            'kategori'=>$kategori,
            'berita'=>$berita
        ];

        return view('berita.berita',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();

        return view('berita.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'judul' => 'required',
                'gambar' => 'required|mimes:jpeg,jpg,png|max:2200',
                'slug' => 'required',
                'isi' => 'required',
                'kategori_id'=>'required'
            ],
            [
                'judul.required' => 'judul tidak boleh kosong',
                'gambar.required' => 'gambar tidak boleh kosong',
                'gambar.mimes'=>'minimal 2200',
                'slug.required' => 'slug tidak boleh kosong',
                'isi.required' => 'isi tidak boleh kosong'
            ]
        );

        $gambar = $request->gambar;
        $new_gambar = time().' = '.$gambar->getClientOriginalName();

        $berita = new Berita;
        $berita->judul = $request->judul;
        $berita->gambar =$new_gambar;
        $berita->slug =$request->slug;
        $berita->isi=$request->isi;
        $berita->kategori_id=$request->kategori_id;
        $berita->save();

        $gambar->move('gambar',$new_gambar);

        return redirect('/berita');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
