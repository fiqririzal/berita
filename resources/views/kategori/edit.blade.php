@extends('admin.admin')

@section('content')
<section class="content">
<div class="card">
    <div class="card-body">

    <form action="/kategori/{{$kategori->id }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
          <label for="kategori">Kategori</label>
          <input type="text" value="{{$kategori->kategori}}"class="form-control" id="kategori" name="kategori">
        </div>
        @error('kategori')
            <div class="alert-danger">{{$message}}</div>
        @enderror
        <div class="form-group">
          <label for="deskripsi">deskripsi</label>
          <input type="text" value="{{$kategori->deskripsi}}" class="form-control" id="deskripsi" name="deskripsi">
        </div>
        @error('deskripsi')
        <div class="alert-danger">{{$message}}</div>
        @enderror
        <div class="form-group">
          <label for="slug">slug</label>
          <input type="deskripsi" class="form-control" id="slug" name="slug">
        </div>
        @error('slug')
        <div class="alert-danger">{{$message}}</div>
        @enderror
        <div class="form-check">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
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
      <!-- /.card-body -->
      <div class="card-footer">
        Footer
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->
  </section>
@endsection
