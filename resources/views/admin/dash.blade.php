<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body style="background-color: #f8f9fa">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Admin Panel</a>
            <div class="ml-auto">
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-outline-light btn-sm">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Selamat Datang, Admin!</h1>
            <p class="lead">Ini adalah dashboard admin. Gunakan panel ini untuk mengelola data aplikasi.</p>
            <hr class="my-4">
            <p>Gunakan menu di atas untuk navigasi atau logout.</p>
        </div>

        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('fasilitas.index') }}" class="btn btn-primary btn-block">Kelola Fasilitas</a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('dosen.index') }}" class="btn btn-info btn-block">Kelola Dosen</a>
            </div>
            <div class="col-md-4">
                <a href="{{ route('kaprodi.index') }}" class="btn btn-success btn-block">Kelola Kaprodi</a>
            </div>
        </div>
    </div>
</body>
</html>
