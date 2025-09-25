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
<body>
    <h1 class="text-center mt-3">CRUD SISWA DENGAN LARAVEL 11</h1>

    <div class="mt3 container">
        @yield('konten')
    </div>
</body>
</html>