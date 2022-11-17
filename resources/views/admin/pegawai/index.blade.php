@extends('admin.layouts.index')

@section('content')
<div class="d-flex">
    <h5>Daftar Pegawai</h5>
    <a class="btn btn-primary ms-auto" href="{{route('admin.pegawai.create')}}">Tambah</a>
</div>

<div class="card mt-3">
    <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">NIP</th>
                <th scope="col">Nama</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Tahun Masuk</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
							@foreach ($pegawai as $value)
								<tr>
									<td>{{$value->nip}}</td>
									<td>{{$value->nama}}</td>
									<td>{{$value->jabatan}}</td>
									<td>{{$value->tahun_masuk}}</td>
									<td>{{($value->status == 1) ? 'Aktif' : 'Tidak Aktif'}}</td>
                  <td>
                    <div class="d-flex gap-3">
                      <a href="{{route('admin.pegawai.edit', $value->id)}}" class="btn btn-sm btn-primary">Edit</a>
                      <form action="{{ route('admin.pegawai.destroy', $value->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                      </form>
                    </div>
                  </td>
								</tr>
							@endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection