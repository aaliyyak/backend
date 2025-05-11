@extends('layouts.app')

@section('content')
    <h2>Tambah Fasilitas</h2>
    <form action="{{ route('fasilitas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Gambar</label>
            <input type="file" name="gambar" class="form-control">
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="mb-3">
            <label>Lokasi</label>
            <input type="text" name="lokasi" class="form-control">
        </div>
        <div class="mb-3">
            <label>Latitude</label>
            <input type="text" name="latitude" class="form-control">
        </div>
        <div class="mb-3">
            <label>Longitude</label>
            <input type="text" name="longitude" class="form-control">
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">💾 Simpan</button>
    </form>
@endsection
