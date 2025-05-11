@extends('layouts.app')

@section('content')
    <h2>Edit Kaprodi</h2>
    <form action="{{ route('kaprodi.update', $kaprodi->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Gambar</label><br>
            <img src="{{ asset('storage/' . $kaprodi->gambar) }}" width="100">
            <input type="file" name="gambar" class="form-control mt-2">
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $kaprodi->nama }}">
        </div>
        <div class="mb-3">
            <label>Fakultas</label>
            <input type="text" name="fakultas" class="form-control" value="{{ $kaprodi->fakultas }}">
        </div>
        <div class="mb-3">
            <label>Program Studi</label>
            <input type="text" name="prodi" class="form-control" value="{{ $kaprodi->prodi }}">
        </div>
        <button type="submit" class="btn btn-primary">💾 Simpan</button>
    </form>
@endsection
