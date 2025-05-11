@extends('layouts.app')

@section('content')
    <div class="mb-4">
        <h2 class="fw-bold text-primary">
            <i class="fas fa-chalkboard-teacher text-primary mr-2"></i> Daftar Dosen
        </h2>

    <div style="font-family: 'Times New Roman', Times, serif; font-size: 16px;">
        <a href="{{ route('dosen.create') }}" class="btn btn-primary mb-3">+ Tambah Dosen</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered align-middle text-nowrap">
                <thead class="table-light">
                    <tr>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Prodi</th>
                        <th>NIDN</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dosen as $item)
                        <tr>
                            <td><img src="{{ asset('storage/' . $item->gambar) }}" width="70" class="img-thumbnail"></td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->prodi }}</td>
                            <td>{{ $item->nidn }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <a href="{{ route('dosen.edit', $item->id) }}" class="btn btn-success btn-sm mb-1">✏️ Edit</a>
                                <form action="{{ route('dosen.destroy', $item->id) }}" method="POST" style="display:inline;">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">🗑️ Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Paginasi -->
<div class="d-flex justify-content-between align-items-center mt-3">
    <span style="color: gray; font-size: 14px;">Menampilkan   {{ $dosen->lastItem() }} hasil dari total {{ $dosen->total() }} data</span>
    {{ $dosen->onEachSide(1)->links('pagination::simple-bootstrap-4') }}
</div>
@endsection

