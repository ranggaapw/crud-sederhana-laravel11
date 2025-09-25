@extends('layout')

@section('konten')

<div class="d-flex align-items-center mb-3">
    <h4 class="mb-0">List Siswa</h4>
    <div class="ms-auto">
        <a class="btn btn-success" href="{{ route('siswa.tambah') }}">
            <i class="bi bi-plus-circle me-1"></i> Tambah Siswa
        </a>
    </div>
</div>

<table class="table table-bordered table-striped align-middle">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>Jenis Kelamin</th>
            <th>Hobi</th>
            <th width="180">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($siswa as $no => $data)
        <tr>
            <td>{{ $no+1 }}</td>
            <td>{{ $data->nis }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->alamat }}</td>
            <td>{{ $data->no_hp }}</td>
            <td>{{ $data->jenis_kelamin }}</td>
            <td>{{ $data->hobi }}</td>
            <td>
                <div class="d-flex gap-2">
                    {{-- Tombol Edit --}}
                    <a href="{{ route('siswa.edit', $data->id) }}" 
                       class="btn btn-sm btn-warning d-flex align-items-center">
                        <i class="bi bi-pencil-square me-1"></i> Edit
                    </a>

                    {{-- Tombol Delete --}}
                    <form action="{{ route('siswa.delete', $data->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger d-flex align-items-center"
                                onclick="return confirm('Yakin mau hapus data ini?')">
                            <i class="bi bi-trash me-1"></i> Delete
                        </button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
