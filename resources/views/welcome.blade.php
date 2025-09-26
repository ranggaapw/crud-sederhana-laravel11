<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login - Aplikasi Sederhana</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #0d6efd, #6c63ff);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .card { border-radius: 12px; }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-lg border-0">
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        <i class="bi bi-mortarboard-fill text-primary" style="font-size: 2.8rem;"></i>
                        <h4 class="mt-2 fw-bold">Aplikasi Sederhana</h4>
                        <p class="text-muted mb-0">Silakan masuk untuk mengelola data siswa</p>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $err)
                                    <li>{{ $err }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login.post') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input name="email" type="text" value="{{ old('email') }}" class="form-control" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input name="password" type="password" class="form-control" required>
                        </div>
                        <div class="d-grid mb-2">
                            <button class="btn btn-primary" type="submit">
                                <i class="bi bi-box-arrow-in-right me-1"></i> Login
                            </button>
                        </div>
                    </form>

                    <div class="text-center">
                        <small class="text-muted">Belum punya akun?</small>
                        <a href="{{ route('register') }}" class="ms-1">Daftar</a>
                    </div>
                </div>
            </div>

            <p class="text-center text-white mt-3 small">&copy; {{ date('Y') }} Aplikasi Sederhana</p>
        </div>
    </div>
</div>
</body>
</html>
