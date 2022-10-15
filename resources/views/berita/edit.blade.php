@extends('admin.admin')

@section('content')
<section class="content">
<div class="card">
    <div class="card-body">

    <form action="/berita/{{$berita->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" class="form-control" value="{{$berita->judul}}" id="judul" name="judul">
        </div>
        @error('judul')
            <div class="alert-danger">{{$message}}</div>
        @enderror

        <div class="form-group">
          <label for="gambar">gambar</label>
          <input type="file" class="form-control" value="{{$berita->gambar}}" id="gambar" name="gambar">
        </div>
        @error('deskripsi')
        <div class="alert-danger">{{$message}}</div>
        @enderror

        <div class="form-group">
          <label for="slug">slug</label>
          <input type="text" class="form-control" value="{{$berita->slug}}" id="slug" name="slug">
        </div>
        @error('slug')
        <div class="alert-danger">{{$message}}</div>
        @enderror

        <div class="form-group">
          <label for="isi">isi</label>
          <input type="text" class="form-control" value="{{$berita->isi}}" id="isi" name="isi">
        </div>
        @error('slug')
        <div class="alert-danger">{{$message}}</div>
        @enderror
        <div class="form-group">
          <label for="kategori">kategori</label>
          <select name="kategori_id" id="" class="form-control">
            <option value="">--pilih kategori--</option>

            @foreach ($kategori as $item)
            @if ($item->id === $berita->kategori_id)
            <option value="{{$item->id}}" selected>{{$item->kategori}}</option>
            @endif
            <option value="{{$item->id}}" >{{$item->kategori}}</option>
            @endforeach
            </select>


            <input type="deskripsi" class="form-control" id="deskripsi" name="deskripsi">
        </div>
        @error('slug')
        <div class="alert-danger">{{$message}}</div>
        @enderror
        <div class="form-check">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
      <div class="card-footer">
        Footer
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->
  </section>
@endsection
