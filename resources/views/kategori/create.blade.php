@extends('admin.admin')

@section('content')
<section class="content">
<div class="card">
    <div class="card-body">

    <form action="{{ url('/kategori') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="kategori">Kategori</label>
          <input type="text" class="form-control" id="kategori" name="kategori">
        </div>
        @error('kategori')
            <div class="alert-danger">{{$message}}</div>
        @enderror
        <div class="form-group">
          <label for="deskripsi">deskripsi</label>
          <input type="deskripsi" class="form-control" id="deskripsi" name="deskripsi">
        </div>
        @error('deskripsi')
        <div class="alert-danger">{{$message}}</div>
        @enderror
        <div class="form-check">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</div>
      <div class="card-footer">
        Footer
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->
  </section>
@endsection
