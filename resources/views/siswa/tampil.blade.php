@extends('layout')

@section('konten')
<div class="container-fluid">
    <div class="row">
        {{-- Sidebar --}}
        <div class="col-md-2 col-lg-2 min-vh-100 p-3 shadow-sm text-white"
             style="background: linear-gradient(180deg, #386aff);">
            <h4 class="fw-bold mb-4">Aplikasi</h4>
            <ul class="nav flex-column gap-2">
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="bi bi-house-door me-2"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('siswa.tampil') }}" class="nav-link active bg-light rounded text-dark px-2">
                        <i class="bi bi-people me-2"></i> Siswa
                    </a>
                </li>
            </ul>
        </div>

        {{-- Main Content dengan shadow --}}
        <div class="col-md-10 col-lg-10 py-4" style="background-color: #f0f2f5;">
            <div class="bg-white shadow-lg rounded-3 p-4">
                
                {{-- Header --}}
                <div class="d-flex justify-content-between align-items-center mb-4 pb-2 border-bottom">
                    <h3 class="fw-bold text-primary">Dashboard Siswa</h3>
                    <a class="btn btn-success" href="{{ route('siswa.tambah') }}">
                        <i class="bi bi-plus-circle me-1"></i> Tambah Siswa
                    </a>
                </div>

                {{-- Summary Card --}}
                <div class="row g-3 mb-4">
                    <div class="col-md-4">
                        <div class="card shadow-sm border-0 text-center p-3" style="background: #386aff; color: white;">
                            <h5 class="fw-bold">{{ $siswa->count() }}</h5>
                            <p class="mb-0">Total Siswa</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow-sm border-0 text-center p-3" style="background: #1cc88a; color: white;">
                            <h5 class="fw-bold">
                                {{ $siswa->where('jenis_kelamin', 'Laki-laki')->count() }}
                            </h5>
                            <p class="mb-0">Laki-laki</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow-sm border-0 text-center p-3" style="background: #e74a3b; color: white;">
                            <h5 class="fw-bold">
                                {{ $siswa->where('jenis_kelamin', 'Perempuan')->count() }}
                            </h5>
                            <p class="mb-0">Perempuan</p>
                        </div>
                    </div>
                </div>

                {{-- Card Tabel --}}
                <div class="card shadow-sm border-0 rounded-3 mb-3">
                    <div class="card-body p-3">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-primary">
                                    <tr>
                                        <th>No</th>
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No Hp</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Hobi</th>
                                        <th class="text-center" width="180">Aksi</th>
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
                                        <td>
                                            <span class="badge bg-{{ $data->jenis_kelamin == 'Laki-laki' ? 'primary' : 'danger' }}">
                                                {{ $data->jenis_kelamin }}
                                            </span>
                                        </td>
                                        <td>{{ $data->hobi }}</td>
                                        <td class="text-center">
                                            <div class="d-flex justify-content-center gap-2">
                                                <a href="{{ route('siswa.edit', $data->id) }}" 
                                                   class="btn btn-sm btn-warning d-flex align-items-center">
                                                    <i class="bi bi-pencil-square me-1"></i> Edit
                                                </a>

                                                <form action="{{ route('siswa.delete', $data->id) }}" method="POST" onsubmit="return confirm('Yakin mau hapus data ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger d-flex align-items-center">
                                                        <i class="bi bi-trash me-1"></i> Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach

                                    @if($siswa->isEmpty())
                                    <tr>
                                        <td colspan="8" class="text-center text-muted py-4">
                                            <i class="bi bi-exclamation-circle"></i> Belum ada data siswa
                                        </td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                {{-- Tombol Logout --}}
                <div class="text-start mt-3">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger px-4">
                            <i class="bi bi-box-arrow-right me-1"></i> Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
