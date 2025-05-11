@extends('layouts.app')

@section('content')
    <h2>Tambah Kaprodi</h2>
    <form action="{{ route('kaprodi.store') }}" method="POST" enctype="multipart/form-data">
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
            <label>Fakultas</label>
            <input type="text" name="fakultas" class="form-control">
        </div>
        <div class="mb-3">
            <label>Program Studi</label>
            <input type="text" name="prodi" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">💾 Simpan</button>
    </form>
@endsection
