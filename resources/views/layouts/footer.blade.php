@php
    $topNews = App\berita::orderBy('id','desc')->limit(2)->get();
    $topNews2 = App\berita::orderBy('id','desc')->limit(4)->get();
@endphp
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-5">
                    <h1>Portal PDI</h1>
                    <h5 class="font-weight-normal mt-4 mb-5">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.
                    </h5>
                </div>
                <div class="col-sm-4">
                    <h3 class="font-weight-bold mb-3">RECENT POSTS</h3>
                    <div class="row">
                        <div class="col-sm-12">
                            <div>
                                <div class="row">
                                    @foreach($topNews2 as $key)
                                    <div class="col-3">
                                        <img src="{{ asset('gambar/' . $key->gambar) }}" alt="thumb"class="img-fluid"/>
                                    </div>
                                    <div class="col-9">
                                        <h5 class="font-weight-600 mb-3">
                                            {{ $key->judul }}
                                        </h5>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <h3 class="font-weight-bold mb-3">CATEGORIES</h3>
                    <div class="footer-border-bottom pb-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0 font-weight-600">
                                @foreach($kategori as $row)
                                {{-- <li class="nav-item active"> --}}
                                  <a class="nav-link" href="">{{ $row->kategori }}</a>
                                {{-- </li> --}}
                                @endforeach
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="d-sm-flex justify-content-between align-items-center">
                        <div class="fs-14 font-weight-600">
                            © 2022 @ <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white">
                                Erian</a>. All rights reserved.
                        </div>
                        <div class="fs-14 font-weight-600">
                            by <a href="https://www.bootstrapdash.com/" target="_blank"
                                class="text-white">anjay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
