<?php

namespace App\Http\Controllers;

use App\Models\Kaprodi;  // Pastikan model Kaprodi diimport
use Illuminate\Http\Request;

class KaprodiController extends Controller
{
    // Menampilkan daftar kaprodi
    public function index()
    {
        $kaprodi = Kaprodi::paginate(4);  // Mengambil semua data kaprodi
        return view('kaprodi.index', compact('kaprodi'));  // Menampilkan ke view dengan data kaprodi
    }

    // Form untuk menambahkan kaprodi baru
    public function create()
    {
        return view('kaprodi.create');
    }

    // Menyimpan kaprodi baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image',
            'nama' => 'required|string',
            'fakultas' => 'required|string',
            'prodi' => 'nullable|string',
        ]);

        $gambarPath = $request->file('gambar')->store('kaprodi', 'public');

        Kaprodi::create([
            'gambar' => $gambarPath,
            'nama' => $request->nama,
            'fakultas' => $request->fakultas,
            'prodi' => $request->prodi,
            
        ]);

        return redirect()->route('kaprodi.index')->with('success', 'kaprodi berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $kaprodi = Kaprodi::findOrFail($id);
        return view('kaprodi.edit', compact('kaprodi'));
    }

    public function update(Request $request, $id)
    {
        $kaprodi = Kaprodi::findOrFail($id);

        $data = $request->validate([
            'nama' => 'required|string',
            'fakultas' => 'required|string',
            'prodi' => 'required|string',
            'gambar' => 'nullable|image',
        ]);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('kaprodi', 'public');
        }

        $kaprodi->update($data);

        return redirect()->route('kaprodi.index')->with('success', 'Data kaprodi diperbarui!');
    }

    public function destroy($id)
    {
        $kaprodi = Kaprodi::findOrFail($id);
        $kaprodi->delete();
        return redirect()->route('kaprodi.index')->with('success', 'kaprodi dihapus!');
    }
}
