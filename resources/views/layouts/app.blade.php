<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Cropper.js CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css" rel="stylesheet">
    <!-- Cropper.js JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>

    <style>
    body {
        font-family: 'Times New Roman', Times, serif;
        font-size: 20px;
    }
    .sidebar {
        background-color: #009CCF;
        height: 100vh;
        padding-top: 60px;
        color: white;
        box-shadow: 2px 0 10px rgba(0,0,0,0.1);
    }
    .sidebar h4 {
        text-align: center;
        margin-bottom: 40px;
        font-size: 24px;
    }
    .sidebar a {
        color: white;
        display: flex;
        align-items: center;
        padding: 14px 20px;
        margin: 12px 15px; /* lebih banyak jarak antar menu */
        border-radius: 10px;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    .sidebar a i {
        margin-right: 12px;
        font-size: 20px;
        width: 25px;
        text-align: center;
    }
    .sidebar a:hover {
        background-color: #007BA7;
        padding-left: 30px; /* efek geser saat hover */
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }
    .footer {
        text-align: center;
        padding: 20px;
        color: #666;
        font-size: 14px;
    }
    .content {
        background-color: white;
        padding: 30px;
    }
    </style>
</head>
<body>
<div class="d-flex">
    <div class="sidebar col-2">
        <h4><i class=""></i> Welcome Admin!</h4>
        <a href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="{{ route('fasilitas.index') }}"><i class="fas fa-building"></i> Fasilitas</a>
        <a href="{{ route('dosen.index') }}"><i class="fas fa-chalkboard-teacher"></i> Dosen</a>
        <a href="{{ route('kaprodi.index') }}"><i class="fas fa-user-tie"></i> Kaprodi</a>
    </div>

    <div class="col-10 content">
        @yield('content')
        <div class="footer">
            <hr>
            Copyright © UNIVERSITAS INDO GLOBAL MANDIRI 2025
        </div>
    </div>
</div>
</body>
</html>
