@extends('admin.admin')

@section('content')
<section class="content">
<div class="card">
    <div class="card-body">

    <form action="/berita" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" class="form-control" id="judul" name="judul">
        </div>
        @error('judul')
            <div class="alert-danger">{{$message}}</div>
        @enderror
        <div class="form-group">
          <label for="gambar">gambar</label>
          <input type="file" class="form-control" id="gambar" name="gambar">
        </div>
        @error('deskripsi')
        <div class="alert-danger">{{$message}}</div>
        @enderror
        <div class="form-group">
          <label for="isi">Isi Berita</label>
          <textarea name="isi" id="isi" class="form-control"></textarea>
          {{-- <input type="" class="form-control" id="isi" name="isi"> --}}
        </div>
        @error('slug')
        <div class="alert-danger">{{$message}}</div>
        @enderror
        <div class="form-group">
          <label for="slug">slug</label>
          <input type="text" class="form-control" id="slug" name="slug">
        </div>
        @error('slug')
        <div class="alert-danger">{{$message}}</div>
        @enderror
        <div class="form-group">
          <label for="kategori">kategori</label>
          <select name="kategori_id" id="" class="form-control">
            <option value="">--pilih kategori--</option>
            @foreach ($kategori as $item)
            <option value="{{$item->id}}">{{$item->kategori}}</option>
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
