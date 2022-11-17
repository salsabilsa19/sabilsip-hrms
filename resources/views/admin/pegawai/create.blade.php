@extends('admin.layouts.index')

@section('content')
<div class="d-flex">
    <h5>Tambah Pegawai</h5>
    <a class="btn btn-secondary ms-auto" href="{{route('admin.pegawai.index')}}">Kembali</a>
</div>

<div class="card mt-3">
    <div class="card-body">
        <form action="{{ route('admin.pegawai.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>NIP</label>
                <input type="number" class="form-control mt-2" name="nip" placeholder="Masukkan NIP">
            </div>
            <div class="mb-3">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control mt-2" name="nama" placeholder="Masukkan nama lengkap">
            </div>
            <div class="mb-3">
                <label>Jabatan</label>
                <input type="text" class="form-control mt-2" name="jabatan" placeholder="Masukkan jabatan">
            </div>
            <div class="mb-3">
                <label>Tahun Masuk</label>
                <input type="number" maxlength="4" class="form-control mt-2" name="tahun_masuk" placeholder="Masukkan tahun masuk">
            </div>
            <div class="mb-3">
                <label>Pilih Status</label>
                <div class="d-flex gap-3 mt-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" value="1" id="status-aktif" checked>
                        <label class="form-check-label" for="status-aktif">
                          Aktif
                        </label>
                      </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" value="2" id="status-tidak-aktif">
                        <label class="form-check-label" for="status-tidak-aktif">
                          Tidak Aktif
                        </label>
                    </div>
                </div>
            </div>
            <div class="d-flex">
                <button class="btn btn-primary ms-auto" type="submit">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection