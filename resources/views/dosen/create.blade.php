@extends('layouts.app')

@section('content')
    <h2>Tambah Dosen</h2>
    <form action="{{ route('dosen.store') }}" method="POST" enctype="multipart/form-data">
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
            <label>Program Studi</label>
            <input type="text" name="prodi" class="form-control">
        </div>
        <div class="mb-3">
            <label>NIDN</label>
            <input type="text" name="nidn" class="form-control">
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <label>Keahlian</label>
            <input type="text" name="keahlian" class="form-control">
        <button type="submit" class="btn btn-primary">💾 Simpan</button>
    </form>
@endsection
