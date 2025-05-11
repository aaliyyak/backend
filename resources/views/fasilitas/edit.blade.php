@extends('layouts.app')

@section('content')
    <h2>Edit Fasilitas</h2>
    <form action="{{ route('fasilitas.update', $fasilitas->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Gambar</label><br>
            <img src="{{ asset('storage/' . $fasilitas->gambar) }}" width="100">
            <input type="file" name="gambar" class="form-control mt-2">
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $fasilitas->nama }}">
        </div>
        <div class="mb-3">
            <label>Lokasi</label>
            <input type="text" name="lokasi" class="form-control" value="{{ $fasilitas->lokasi }}">
        </div>
        <div class="mb-3">
            <label>Latitude</label>
            <input type="text" name="latitude" class="form-control" value="{{ $fasilitas->latitude }}">
        </div>
        <div class="mb-3">
            <label>Longitude</label>
            <input type="text" name="longitude" class="form-control" value="{{ $fasilitas->longitude }}">
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ $fasilitas->deskripsi }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">💾 Simpan</button>
    </form>
@endsection
