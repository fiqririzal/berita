<?php

namespace App\Http\Controllers;

use App\berita;
use App\kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

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
                'isi' => 'required',
                'kategori_id'=>'required'
            ],
            [
                'judul.required' => 'judul tidak boleh kosong',
                'gambar.required' => 'gambar tidak boleh kosong',
                'gambar.mimes'=>'minimal 2200',
                'isi.required' => 'isi tidak boleh kosong'
            ]
        );

        $gambar = $request->gambar;
        $new_gambar = time().' = '.$gambar->getClientOriginalName();

        $berita = new Berita;
        $berita->judul = $request->judul;
        $berita->gambar =$new_gambar;
        $berita->isi=$request->isi;
        $berita->kategori_id=$request->kategori_id;
        $berita->slug=$request->slug;
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
        $berita = Berita::findOrfail($id)->first();

        return view('berita.show',compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::all();
        $berita = Berita::findOrfail($id)->first();

        $data=[
            'kategori'=>$kategori,
            'berita'=>$berita
        ];

        return view('berita.edit',$data);
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
        $request->validate(
            [
                'judul' => 'required',
                'gambar' => '|mimes:jpeg,jpg,png|max:2200',
                'isi' => 'required',
                'kategori_id'=>'required'
            ],
            [
                'judul.required' => 'judul tidak boleh kosong',
                'gambar.mimes'=>'minimal 2200',
                'isi.required' => 'isi tidak boleh kosong'
            ]

        );
        $berita = Berita::find($id);
        if($request->has('gambar')){
            $path = "gambar/";
            File::delete($path.$berita->gambar);
            $gambar = $request->gambar;
            $new_gambar = time().'='.$gambar->getClientOriginalName();
            $gambar->move('gambar/'.$new_gambar);

            $berita-> gambar=$new_gambar;
        }
        $berita->judul = $request->judul;
        $berita->isi=$request->isi;
        $berita->kategori_id=$request->kategori_id;
        $berita->slug=$request->slug;

        $berita->save();
        return redirect('/berita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita=Berita::find($id);

        $path="gambar/";
        File::delete($path . $berita->gambar);

        $berita->delete();

        return redirect('/berita');
    }
}
