@extends('admin.admin')

@section('content')
    <section class="content">
        <div class="card mt-3">
            <div class="card-header">
                <h2>Ini Berita para wibuawan indonesia</h2>
            </div>
            <div class="card-body">
                <a href="/berita/create" class="btn btn-primary my-3">Tambah</a>
                <div class="d-flex flex-row flex-wrap">
                    @forelse ($berita as $key => $item)
                        <div class="card col-4">
                            <div class="row">
                                <div class="card-body">
                                    <img src="{{ asset('gambar/' . $item->gambar) }}" class="card-img-top">
                                    <h5 class="card-title">{{ $item->judul }}</h5>
                                    <p>{{ $item->kategori->kategori }}</p>
                                    <p class="card-text">{!! Str::limit($item->isi, 20) !!}</p>
                                    <form action="/berita/{{ $item->id }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="/berita/{{ $item->id }}" class="btn btn-info btn-sm">Detail</a>
                                        <a href="/berita/{{ $item->id }}/edit" class="btn btn-warning btn-sm">edit</a>
                                        <input type="submit" class="btn btn-danger btn-sm" value="delete">
                                    </form>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
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
