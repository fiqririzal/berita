<?php

namespace App\Http\Controllers;

use App\berita;
use App\kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;

class KategoriController extends Controller
{
    private $token;
    public function guzzle(){
        $client = new Client();
//get data
        $url = 'https://survey.stb.web.id/api/progress/questionnaire';

        $json = [
            'username'=>'relawan',
            'password'=>'12345678',
        ];
        $headers = [
            'Accept'=>'appliaction/json',
            'Authorization'=>'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZWRhZDU2YjgxNThlOTljOThhZDM2M2ZkM2VlNmZkNWMzMmZmOTk5ZWFlMzc0NzdiZDE2ZDE0OGVhMDcxNTk0YWQyNmFmZjE0YTE0NTcxMWQiLCJpYXQiOjE2NjYwNzk2NjUuNzY5Mzk3MDIwMzM5OTY1ODIwMzEyNSwibmJmIjoxNjY2MDc5NjY1Ljc2OTQwMTA3MzQ1NTgxMDU0Njg3NSwiZXhwIjoxNjk3NjE1NjY1Ljc2Mzk5NzA3Nzk0MTg5NDUzMTI1LCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.Zdl5t7O4wBOxgDVW97FkPW8m9ePUx6HqrbLC65Pr2nDTPn14mT62BC22ZKrBj31CTUnJ-fuHHEG1-S3cpA6O5wZ9pomxbGGx_Ko3KEPuI-LSdPs6ZDkHOCbEB6hWJ19220PrlLcTmEbuJJdd1oYzK1Kstb2a7nccbUujUddCLAeQSq39MDDW7ZU158HUAY2wkUCo5yheZoaujqD2_5HZI54yWloqzpvd2n8vTLvKDUFJMl_AkhtHrbGb-7s9AZILqeo89wb7Rcqe1pDfYUVq2D0-1z-eze2apIDmmrYB2OTGc7lmY5tTL83b1RYcMOv9TFaPlZ8PeYhowayvaniRyGvHxA38SnJweeGPhsLdhG-EtFepPTGeLnyCPOm6QlbNoXq5VBeEua-LN8s429WOdYnR4wa1dOz4HSk-lymtKzxP28MbvN9XCjOcJucaWsbp6yKQtA2AP3XtVQqCYQVlJyk_iV93uFdGaYZ6EA9rJ9VikeFp2CyAK5o-wx4aG2XvaUUR0PotPaEh8FeXkBrSseAtO5dFWNgtJYQ9vFcr1lLZPThUiXmmmEZIJVekIPa7tZ1p8hYikgSIDMK1GBQ14oA4I___5Mf4tBalaJ8e1nIrAwDvoY0KRvvPwgNbnS5Mwm5VIeVuvpw2zAuGR8K4gOnDF4EGuz5ZivttOVJtBAg'
        ];

        $response = $client ->request('get',$url,[
            'headers' =>$headers,
            // 'json'=> $json,
        ]);
// merapihkan json
        $data = json_decode($response->getBody(),true);
// ngambil data
        dd($data);  
        dd($data['data']['token']);
    }
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

