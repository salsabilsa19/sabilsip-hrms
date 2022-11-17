@extends('admin.layouts.index')

@section('content')
<div class="d-flex">
    <h5>Ubah Gaji</h5>
    <a class="btn btn-secondary ms-auto" href="{{route('admin.gaji.index')}}">Kembali</a>
</div>

<div class="card mt-3">
    <div class="card-body">
        <form action="{{ route('admin.gaji.update', $gaji->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label>Tanggal</label>
                <input type="date" class="form-control mt-2" name="tanggal_gaji" value="{{$gaji->tanggal_gaji}}" placeholder="Masukkan Tanggal">
            </div>
            <div class="mb-3">
                <label>Tunjangan</label>
                <input type="text" class="form-control mt-2" value="{{$gaji->tunjangan}}" name="tunjangan" placeholder="Masukkan Tunjangan">
            </div>
            <div class="mb-3">
                <label>Potongan</label>
                <input type="number" class="form-control mt-2" value="{{$gaji->potongan}}" name="potongan" placeholder="Masukkan Tunjangan">
            </div>
            <div class="mb-3">
                <label>Upah Lembur</label>
                <input type="number" class="form-control mt-2" value="{{$gaji->upah_lembur}}" name="upah_lembur" placeholder="Masukkan Upah Lembur">
            </div>
            <div class="mb-3">
                <label>Upah Gaji</label>
                <input type="number" class="form-control mt-2" value="{{$gaji->upah_gaji}}" name="upah_gaji" placeholder="Masukkan Upah Gaji">
            </div>
            <div class="d-flex">
                <button class="btn btn-primary ms-auto" type="submit">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection