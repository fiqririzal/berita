@extends('admin.admin')

@section('content')
<section class="content">
    <div class="row">
    <div class="col-12">
        <div class="card">
            <img src="{{asset('gambar/'.$berita->gambar)}}" >
            <div class="card-body">
            <h3>{{$berita->judul}}</h3>
            <p class="card-text">{!!($berita->isi)!!}</p>
            <a href="/berita" class="btn btn-info btn-sm">Kembali</a>
            </div>
        </div>
    </div>
</div>

    <!-- Default box --
      {{-- <table class="table table-hover table-striped table-border" id="table"><thead>
        <th>#</th>
        <th>Kategori</th>
        <th>judul</th>
        <th>gambar</th>
        <th>isi</th>
        <th>Tindakan</th>
    </thead> --}}
        {{-- <tbody>
            @foreach ($data as $value)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$value->judul}}</td>
                    <td>{{$value->gambar}}</td>
                    <td>{{$value->slug}}</td>
                    <td>{{$value->isi}}</td>
                    <td>{{$value->kategori_id}}</td>
                </tr>
            @endforeach
        </tbody> --}}
    </table>
    </div>
    {{-- @include('') --}}
       /.card-body -->
      <div class="card-footer">
        Footer
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->
  </section>
@endsection
