{{-- @include('layouts.navbar') --}}
<div class="content-wrapper">
    <div class="container">
        <div class="card">
            <img src="{{ asset('gambar/' . $berita->gambar) }}" class="card-img-top" alt="banner">
            <div class="card-body">
              <h5 class="card-title">{{ $berita->judul }}</h5>
              <p class="card-text">{{ $berita->isi }}</p>
              <a href="/view" class="btn btn-info btn-sm">Kembali</a>
            </div>
        </div>
    </div>
</div>


{{-- 
@include('layouts.footer') --}}

<!-- <section class="content">
    <div class="row">
    <div class="col-12">
        <div class="card">
            <img src="{{asset('gambar/'.$berita->gambar)}}" >
            <div class="card-body">
            <h3>{{$berita->judul}}</h3>
            <p class="card-text">{{($berita->isi)}}</p>
            <a href="/view" class="btn btn-info btn-sm">Kembali</a>
            </div>
        </div>
    </div>
</div> -->
