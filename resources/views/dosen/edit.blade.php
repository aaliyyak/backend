@extends('layouts.app')

@section('content')
    <h2>Edit Dosen</h2>
    <form action="{{ route('dosen.update', $dosen->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Gambar</label><br>
            <img src="{{ asset('storage/' . $dosen->gambar) }}" width="100">
            <input type="file" name="gambar" class="form-control mt-2">
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $dosen->nama }}">
        </div>
        <div class="mb-3">
            <label>Program Studi</label>
            <input type="text" name="prodi" class="form-control" value="{{ $dosen->prodi }}">
        </div>
        <div class="mb-3">
            <label>NIDN</label>
            <input type="text" name="nidn" class="form-control" value="{{ $dosen->nidn }}">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $dosen->email }}">
        </div>
        <div class="mb-3">
            <label>Keahlian</label>
            <input type="text" name="keahlian" class="form-control" value="{{ $dosen->keahlian }}">
        </div>
        <button type="submit" class="btn btn-primary">💾 Simpan</button>
    </form>
@endsection
