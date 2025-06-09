<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
{
    $dosen = Dosen::paginate(5); // tampilkan 10 dosen per halaman
    return view('dosen.index', compact('dosen'));
}


    public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image',
            'nama' => 'required|string',
            'prodi' => 'required|string',
            'nidn' => 'nullable|string',
            'email' => 'nullable|email',
            'keahlian' => 'nullable|string', 
        ]);

        $gambarPath = $request->file('gambar')->store('dosen', 'public');

        Dosen::create([
            'gambar' => $gambarPath,
            'nama' => $request->nama,
            'prodi' => $request->prodi,
            'nidn' => $request->nidn,
            'email' => $request->email,
            'keahlian' => $request->keahlian,
        ]);

        return redirect()->route('dosen.index')->with('success', 'Dosen berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $dosen = Dosen::findOrFail($id);
        return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, $id)
    {
        $dosen = Dosen::findOrFail($id);

        $data = $request->validate([
            'nama' => 'required|string',
            'prodi' => 'required|string',
            'nidn' => 'required|string',
            'email' => 'required|email',
            'gambar' => 'nullable|image',
            'keahlian' => 'nullable|string',
        ]);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('dosen', 'public');
        }

        $dosen->update($data);

        return redirect()->route('dosen.index')->with('success', 'Data dosen diperbarui!');
    }

    public function destroy($id)
    {
        $dosen = Dosen::findOrFail($id);
        $dosen->delete();
        return redirect()->route('dosen.index')->with('success', 'Dosen dihapus!');
    }
}
