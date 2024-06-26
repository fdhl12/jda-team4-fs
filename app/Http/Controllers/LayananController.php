<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        $layanans = Layanan::latest()->get();
        return view('layanan', compact('layanans'));
    }

    public function admin(Request $request, Layanan $layanans)
    {

        $query = $request->input('query');

        if ($query) {
            $layanans = $layanans->where('nama', 'LIKE', "%{$query}%")->get();
        } elseif (request()->get('show') == 'all'){
            $layanans = Layanan::latest()->get();
        } else {
            $layanans = $layanans->latest()->paginate(10);
        }

        return view('admin.layanan.index', compact('layanans', 'query'));
    }

    public function store(Request $request, Layanan $layanan)
    {
        $request->validate([
            'nama' => ['required'],
            'telepon' => ['required'],
            'buka' => ['nullable'],
            'tutup' => ['nullable'],
            'alamat' => ['nullable'],
        ]);

        $layanan->create($request->all(['nama', 'telepon', 'buka', 'tutup', 'alamat']));

        return redirect()->back()->with('store', 'Layanan berhasil ditambah');
    }

    public function update(Request $request, Layanan $layanan)
    {
        $request->validate([
            'nama' => ['required'],
            'telepon' => ['required'],
            'buka' => ['nullable'],
            'tutup' => ['nullable'],
            'alamat' => ['nullable'],
        ]);

        $layanan = $layanan->find($request->id);
        $layanan->update($request->all(['nama', 'telepon', 'buka', 'tutup', 'alamat']));
        return redirect()->back()->with('update', 'Layanan berhasil diubah');
    }

    public function destroy(Request $request, Layanan $layanan)
    {
        $layanan = $layanan->find($request->id);
        $layanan->delete();
        return redirect()->back()->with('destroy', "Layanan {$layanan['nama']} berhasil dihapus.");
    }
}
