<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Link ke file CSS -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" />
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Dashboard</h1>
        
        <div class="row mt-4">
            <!-- Statistik Fasilitas -->
            <div class="col-md-4">
                <div class="card stat-card">
                    <div class="card-header text-white bg-primary">
                        Fasilitas
                    </div>
                    <div class="card-body">
                        <h3>{{ $fasilitasCount }}</h3>
                        <p>Total Fasilitas yang tersedia</p>
                    </div>
                </div>
            </div>

            <!-- Statistik Dosen -->
            <div class="col-md-4">
                <div class="card stat-card">
                    <div class="card-header text-white bg-success">
                        Dosen
                    </div>
                    <div class="card-body">
                        <h3>{{ $dosenCount }}</h3>
                        <p>Total Dosen yang terdaftar</p>
                    </div>
                </div>
            </div>

            <!-- Statistik Kaprodi -->
            <div class="col-md-4">
                <div class="card stat-card">
                    <div class="card-header text-white bg-warning">
                        Kaprodi
                    </div>
                    <div class="card-body">
                        <h3>{{ $kaprodiCount }}</h3>
                        <p>Total Kaprodi yang ada</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Link ke file JS (Bootstrap) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
