<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::paginate(4);
        return view('fasilitas.index', compact('fasilitas'));
    }

    public function create()
    {
        return view('fasilitas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image',
            'nama' => 'required|string',
            'lokasi' => 'required|string',
            'latitude' => 'nullable|regex:/^\-?\d+(\.\d{1,7})?$/',  // Format validasi untuk latitude
            'longitude' => 'nullable|regex:/^\-?\d+(\.\d{1,7})?$/', // Format validasi untuk longitude
            'deskripsi' => 'required|string',
        ]);

        $gambarPath = $request->file('gambar')->store('fasilitas', 'public');

        Fasilitas::create([
            'gambar' => $gambarPath,
            'nama' => $request->nama,
            'lokasi' => $request->lokasi,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('fasilitas.index')->with('success', 'Fasilitas berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        return view('fasilitas.edit', compact('fasilitas'));
    }

    public function update(Request $request, $id)
    {
        $fasilitas = Fasilitas::findOrFail($id);

        $data = $request->validate([
            'nama' => 'required|string',
            'lokasi' => 'required|string',
            'deskripsi' => 'required|string',
            'latitude' => 'nullable|regex:/^\-?\d+(\.\d{1,7})?$/',  // Format validasi untuk latitude
            'longitude' => 'nullable|regex:/^\-?\d+(\.\d{1,7})?$/', // Format validasi untuk longitude
            'gambar' => 'nullable|image'
        ]);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('fasilitas', 'public');
        }

        $fasilitas->update($data);

        return redirect()->route('fasilitas.index')->with('success', 'Data fasilitas diperbarui!');
    }

    public function destroy($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        $fasilitas->delete();
        return redirect()->route('fasilitas.index')->with('success', 'Fasilitas dihapus!');
    }
}
