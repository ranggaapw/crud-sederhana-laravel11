@extends('layout')

@section('konten')

<h4>Edit Siswa</h4>

<form action="{{ route('siswa.update', $siswa->id) }}" method="post">
    @csrf
    <div class="mb-3">
        <label class="form-label">NIS</label>
        <input type="number" name="nis" value="{{ $siswa->nis }}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" value="{{ $siswa->nama }}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <input type="text" name="alamat" value="{{ $siswa->alamat }}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">No Hp</label>
        <input type="text" name="no_hp" value="{{ $siswa->no_hp }}" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Jenis Kelamin</label>
        <select name="jenis_kelamin" value="{{ $siswa->jenis_kelamin }}" class="form-control">
            <option value="">-- Pilih Jenis Kelamin --</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Hobi</label>
        <input type="text" name="hobi" value="{{ $siswa->hobi }}" class="form-control">
    </div>

    <button class="btn btn-primary">Edit</button>
</form>

@endsection
