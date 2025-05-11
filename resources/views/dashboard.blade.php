@extends('layouts.app')

@section('content')
    <!-- Judul Halaman -->
    <div class="mb-4">
        <h2 class="fw-bold text-primary">
            <i class="fas fa-tachometer-alt me-2"></i> Dashboard Admin
        </h2>
        <p class="text-muted">Pantau data penting secara cepat dan efisien.</p>
        <hr>
    </div>

    <!-- Kartu Statistik -->
    <div class="row">
        <!-- Dosen -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg border-0 text-white" style="background-color: #007bff;">
                <div class="card-body d-flex align-items-center">
                    <div class="me-3">
                        <i class="fas fa-chalkboard-teacher fa-3x"></i>
                    </div>
                    <div>
                        <h6 class="card-title mb-1">Total Dosen</h6>
                        <h2 class="fw-bold">{{ $dosenCount }}</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kaprodi -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg border-0 text-white" style="background-color: #28a745;">
                <div class="card-body d-flex align-items-center">
                    <div class="me-3">
                        <i class="fas fa-user-tie fa-3x"></i>
                    </div>
                    <div>
                        <h6 class="card-title mb-1">Total Kaprodi</h6>
                        <h2 class="fw-bold">{{ $kaprodiCount }}</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fasilitas -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg border-0 text-white" style="background-color: #17a2b8;">
                <div class="card-body d-flex align-items-center">
                    <div class="me-3">
                        <i class="fas fa-building fa-3x"></i>
                    </div>
                    <div>
                        <h6 class="card-title mb-1">Total Fasilitas</h6>
                        <h2 class="fw-bold">{{ $fasilitasCount }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
