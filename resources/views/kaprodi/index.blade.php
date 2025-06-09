@extends('layouts.app')

@section('content') 
    <div class="mb-4">
        <h2 class="fw-bold text-primary">
            <i class="fas fa-user-tie text-primary mr-2"></i> Daftar Kaprodi
        </h2>

        <div style="font-family: 'Times New Roman', Times, serif; font-size: 14px;">
            <a href="{{ route('kaprodi.create') }}" class="btn btn-primary mb-3">+ Tambah Kaprodi</a>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <!-- Wrapper scroll horizontal -->
            <div style="overflow-x: auto;">
                <table class="table table-bordered" style="min-width: 700px;">
                    <thead>
                        <tr>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Fakultas</th>
                            <th>Program Studi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kaprodi as $item)
                            <tr>
                                <td><img src="{{ asset('storage/' . $item->gambar) }}" width="70"></td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->fakultas }}</td>
                                <td>{{ $item->prodi }}</td>
                                <td>
                                    <a href="{{ route('kaprodi.edit', $item->id) }}" class="btn btn-success btn-sm">✏️ Edit</a>
                                    <form action="{{ route('kaprodi.destroy', $item->id) }}" method="POST" style="display:inline;">
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
                <span style="color: gray; font-size: 14px;">
                    Menampilkan {{ $kaprodi->lastItem() }} hasil dari total {{ $kaprodi->total() }} data
                </span>
                {{ $kaprodi->onEachSide(1)->links('pagination::simple-bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection
