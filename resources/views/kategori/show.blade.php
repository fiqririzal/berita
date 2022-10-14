

        @extends('admin.admin')

        @section('content')
        <section class="content">
        <div class="card">
            <div class="card-body">
                <h1>{{$kategori->kategori}}</h1>
        <p>{{$kategori->deskripsi}}</p>
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
