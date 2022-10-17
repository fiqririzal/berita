<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Portal PDi</title>
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets2/vendors/mdi/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets2/vendors/aos/dist/aos.css/aos.css') }}" />

    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="{{ asset('bcg.jpg') }}" />

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets2/css/style.css') }}">
    <!-- endinject -->

    <style>
        .content-wrapper {
            background-image: url('/bcg.jpg') !important;
        }
    </style>
</head>

@include('layouts.navbar')
<div class="card">
    <div class="card-header ">
        <h1>Selamat Datang Di Portal PDI Perjuangan</h1>
    </div>
</div>
<div class="content-wrapper ">
    <div class="container">
        <div class="row" data-aos="fade-up">
            <div class="col-xl-8 stretch-card grid-margin">
                <div class="position-relative">
                    <img src="{{ asset('gambar/' . $berita->gambar) }}" alt="banner" class="img-fluid" />
                    <div class="banner-content">
                        <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                            global news
                        </div>
                        <h3 class="mb-0">{{ $berita->judul }}</h3>
                        <p>{!! substr($berita->isi, 0, 101) !!}
                            <a href="/view/{{ $berita->id }}" class="btn btn-info btn-sm">Selanjutnya</a>
                        <div class="fs-12">
                            <span class="mr-2">dibuat pada: </span> {{ $berita->created_at }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 stretch-card grid-margin">
                <div class="card bg-primary text-dark">
                    <div class="card-body">
                        <h2>Berita Terbaru</h2>
                        <div class="row">
                            @foreach ($topNews as $key => $topNews)
                            <a href="/view/{{ $berita->id }}">
                                <div
                                    class="d-flex border-bottom-blue pt-2 pb-2 align-items-center justify-content-between">
                                    <div class="card col-12">

                                        <div class="rotate-img">
                                            <img src="{{ asset('gambar/' . $topNews->gambar) }}" alt="thumb"
                                                class="img-fluid img-lg" height=300 />
                                        </div>
                                        <div class="pr-3">
                                            <h5>{{ $topNews->judul }}</h5>
                                            <div class="fs-12">
                                                <span class="mr-2">Photo </span>{{ $topNews->created_at }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-lg-3 stretch-card grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h2>Category</h2>
                            <ul class="vertical-menu">
                                @foreach ($kategori as $row)
                                    <li class="nav-item active">
                                        <a class="nav-link" href="">{{ $row->kategori }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 stretch-card grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                @foreach ($topNews2 as $key)
                                <a href="/view/{{ $berita->id }}">
                                <div class="col-sm-4 grid-margin">
                                        <div class="position-relative">
                                                <div class="rotate-img">
                                                    <img src="{{ asset('gambar/' . $key->gambar) }}" alt="thumb"
                                                        class="img-fluid" />
                                                </div>
                                                <div class="badge-positioned">
                                                    <span class="badge badge-danger font-weight-bold">Flash news</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-8  grid-margin">
                                            <h2 class="mb-2 font-weight-600">
                                                {{ $key->judul }}
                                            </h2>
                                            <div class="fs-13 mb-2">
                                                <span class="mr-2">Photo </span>{{ $key->created_at }}
                                            </div>
                                            <p class="mb-0">
                                                {!! substr($key->isi, 0, 101) !!}
                                            </p>
                                        </div>
                                    @endforeach
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    @include('layouts.footer');

    <!-- inject:js -->
    <script src="{{ asset('assets2/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="{{ asset('assets2/vendors/aos/dist/aos.js/aos.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="{{ asset('assets2/js/demo.js') }}"></script>
    <script src="{{ asset('assets2/js/jquery.easeScroll.js') }}"></script>
    <!-- End custom js for this page-->
