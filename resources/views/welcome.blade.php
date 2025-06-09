@extends('layouts.app')

@section('content')
    <h1>Selamat Datang, Admin!</h1>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card bg-light p-3">
                <h5>Total Dosen</h5>
                <p>{{ $dosenCount }}</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-light p-3">
                <h5>Total Kaprodi</h5>
                <p>{{ $kaprodiCount }}</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-light p-3">
                <h5>Total Fasilitas</h5>
                <p>{{ $fasilitasCount }}</p>
            </div>
        </div>
    </div>
@endsection