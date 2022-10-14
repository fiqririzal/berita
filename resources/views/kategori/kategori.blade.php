@extends('admin.admin')

@section('content')
    <section class="content">
        <div class="card mt-3">
            <div class="card-header">
                <h2>Ini Kategori Berita Wibu</h2>
            </div>
            <div class="card-body">
                <a href="/kategori/create" class="btn btn-primary my-3">Tambah</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($kategori as $key=> $item)
                            <tr>
                                <td>{{ $key * 1 }}</td>
                                <td>{{ $item->kategori }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td>{{ $item->slug }}</td>
                                <td>
                                    <form action="/kategori-hapus/{{ $item->id }}" method="post">
                                        @csrf
                                        <a href="/kategori/{{ $item->id }}" class="btn btn-info btn-sm">Detail</a>
                                        <a href="/kategori/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                        <input type="submit" class="btn btn-danger btn-sm" value="delete">
                                    </form>
                            </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
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
