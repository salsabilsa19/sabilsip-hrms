@extends('admin.layouts.index')

@section('content')
<div class="d-flex">
    <h5>Daftar Data Gaji</h5>
    <a class="btn btn-primary ms-auto" href="{{route('admin.gaji.create')}}">Tambah</a>
</div>

<div class="card mt-3">
    <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Tanggal</th>
                <th scope="col">Tunjangan</th>
                <th scope="col">Potongan</th>
                <th scope="col">Upah Lembur</th>
                <th scope="col">Upah Gaji</th>
                <th scope="col">Total Gaji</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
							@foreach ($gaji as $value)
								<tr>
									<td>{{$value->tanggal_gaji}}</td>
									<td>{{$value->tunjangan}}</td>
									<td>{{$value->potongan}}</td>
                  <td>{{$value->upah_lembur}}</td>
                  <td>{{$value->upah_gaji}}</td>
                  <td>{{$value->tunjangan+$value->upah_lembur+$value->upah_gaji-$value->potongan}}</td>

                  <td>
                    <div class="d-flex gap-3">
                      <a href="{{route('admin.gaji.edit', $value->id)}}" class="btn btn-sm btn-primary">Edit</a>
                      <form action="{{ route('admin.gaji.destroy', $value->id) }}" method="post">
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