@extends('admin.admin')

@section('content')
    <section class="content">
        <div class="card mt-3">
            <div class="card-header">
                <h2>Ini Berita para wibuawan indonesia</h2>
            </div>
            <div class="card-body">
                <a href="/berita/create" class="btn btn-primary my-3">Tambah</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Isi</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($berita as $key => $item)
                            <tr>
                                <td>{{ $key * 1 }}</td>
                                <td>{{ $item->judul }}</td>
                                <td>{{ $item->gambar }}</td>
                                <td>{{ $item->slug }}</td>
                                <td>{{ $item->isi }}</td>
                                <td>{{ $item->kategori_id }}</td>
                                <td>
                                    {{-- <form action="/berita-hapus/{{ $item->id }}" method="post">
                                        @csrf
                                        <a href="/berita/{{ $item->id }}" class="btn btn-info btn-sm">Detail</a>
                                        <a href="/berita/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                        <input type="submit" class="btn btn-danger btn-sm" value="delete"> --}}
                                    {{-- </form> --}}
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
        </div>
        <!-- /.card -->
    </section>
@endsection
