@extends('admin.layouts.index')

@section('content')
<div class="d-flex">
    <h5>Tambah Data Gaji</h5>
    <a class="btn btn-secondary ms-auto" href="{{route('admin.gaji.index')}}">Kembali</a>
</div>

<div class="card mt-3">
    <div class="card-body">
        <form action="{{ route('admin.gaji.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Tanggal</label>
                <input type="date" class="form-control mt-2" name="tanggal_gaji" placeholder="Masukkan Tanggal">
            </div>
            <div class="mb-3">
                <label>Tunjangan</label>
                <input type="number" class="form-control mt-2" name="tunjangan" placeholder="Masukkan Tunjangan">
            </div>
            <div class="mb-3">
                <label>Potongan</label>
                <input type="number" class="form-control mt-2" name="potongan" placeholder="Masukkan Potongan">
            </div>
            <div class="mb-3">
                <label>Upah Lembur</label>
                <input type="number" class="form-control mt-2" name="upah_lembur" placeholder="Masukkan Upah Lembur">
            </div>
            <div class="mb-3">
                <label>Upah Gaji</label>
                <input type="number" class="form-control mt-2" name="upah_gaji" placeholder="Masukkan Upah Gaji">
            </div>
            <div class="d-flex">
                <button class="btn btn-primary ms-auto" type="submit">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection