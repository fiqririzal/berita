@extends('admin.admin')

@section('content')
<section class="content">

    <!-- Default box -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Table Admin</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Blank Page</li>
              </ol>
            </div>
          </div>
        </div>
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Table Admin</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
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
