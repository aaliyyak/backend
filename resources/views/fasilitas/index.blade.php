@extends('layouts.app')

@section('content')
<div class="mb-4">
    <h2 class="fw-bold text-primary">
        <i class="fas fa-building text-primary mr-2"></i> Daftar Fasilitas
    </h2>

    <div style="font-family: 'Times New Roman', Times, serif; font-size: 14px;">
        <a href="{{ route('fasilitas.create') }}" class="btn btn-primary">Tambah Fasilitas</a>

        <!-- Wrapper buat scroll horizontal -->
        <div style="overflow-x: auto; margin-top: 15px;">
            <table class="table table-bordered" style="min-width: 900px;">
                <thead style="background-color: #e0e0e0;">
                    <tr>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Lokasi</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fasilitas as $item)
                        <tr>
                            <td><img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar" width="140"></td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td>{{ $item->lokasi }}</td>
                            <td>{{ $item->latitude }}</td>
                            <td>{{ $item->longitude }}</td>
                            <td>
                                <a href="{{ route('fasilitas.edit', $item->id) }}" class="btn btn-success btn-sm" style="font-size: 12px; margin-right: 10px;">
                                    <i class="fas fa-pencil-alt"></i> Edit
                                </a>

                                <form action="{{ route('fasilitas.destroy', $item->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" style="font-size: 12px;">
                                        <i class="fas fa-trash-alt"></i> Hapus
                                    </button>
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
                Menampilkan {{ $fasilitas->lastItem() }} hasil dari total {{ $fasilitas->total() }} data
            </span>
            {{ $fasilitas->onEachSide(1)->links('pagination::simple-bootstrap-4') }}
        </div>
    </div>
</div>
@endsection
