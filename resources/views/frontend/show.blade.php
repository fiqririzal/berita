<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Portal Berita JCC</title>
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets2/vendors/mdi/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets2/vendors/aos/dist/aos.css/aos.css') }}" />

    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="{{ asset('bcg.jpg') }}" />

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets2/css/style.css') }}">
    <!-- endinject -->

    {{-- <style>
        .content-wrapper {
            background-image: url('/bcg.jpg') !important;
        }
    </style> --}}
</head>

@include('layouts.navbar')
<div class="content-wrapper bg-success">
    <div class="container">
        <div class="card">
            <img src="{{asset('gambar/'.$berita->gambar)}}" >
            <div class="card-body">
            <h3>{{$berita->judul}}</h3>
            <p class="card-text">{!!($berita->isi)!!}</p>
            <a href="/view" class="btn btn-info btn-sm">Kembali</a>

            </div>
        </div>
    </div>
</div>



@include('layouts.footer')

 {{-- <section class="content">
    <div class="row">
    <div class="col-12">
        <div class="card">
            <img src="{{asset('gambar/'.$berita->gambar)}}" >
            <div class="card-body">
            <h3>{{$berita->judul}}</h3>
            <p class="card-text">{!!($berita->isi)!!}</p>
            <a href="/view" class="btn btn-info btn-sm">Kembali</a>
            </div>
        </div>
    </div>
</div> --}}
