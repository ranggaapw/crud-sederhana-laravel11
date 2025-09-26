<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Sederhana Laravel</title>
    <link rel="stylesheet" href="{{  asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>
<body style="background-color: #f8f9fc;">

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: linear-gradient(90deg, #386aff, #2952cc);">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold text-white" href="#">
                <i class="bi bi-mortarboard-fill me-2"></i> CRUD SISWA LARAVEL 11
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#"><i class="bi bi-house-door me-1"></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('siswa.tampil') }}"><i class="bi bi-people me-1"></i> Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <div class="mt-4 container-fluid">
        @yield('konten')
    </div>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>
</html>
