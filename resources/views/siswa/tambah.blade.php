@extends('layout')

@section('konten')

<h4>Tambah Siswa</h4>

<form action="{{ route('siswa.submit') }}" method="post">
    @csrf
    <div class="mb-3">
        <label class="form-label">NIS</label>
        <input type="number" name="nis" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" name="alamat" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">No Hp</label>
        <input type="text" name="no_hp" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Jenis Kelamin</label>
        <select name="jenis_kelamin" class="form-control">
            <option value="">-- Pilih Jenis Kelamin --</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Hobi</label>
        <input type="text" name="hobi" class="form-control">
    </div>

    <button class="btn btn-primary">Tambah</button>
</form>

@endsection
