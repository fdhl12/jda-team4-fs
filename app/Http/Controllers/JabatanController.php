<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index()
    {
        $jabatans = Jabatan::latest()->get();
        return view('admin.jabatan.index', compact('jabatans'));
    }

    public function store(Request $request)
    {
        // Validasi data masukan
        $request->validate([
            'name' => 'required|string|max:55',
        ]);

        Jabatan::create([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.jabatan.index')->with('update', 'Jabatan berhasil dibuat');
    }

    public function update(Request $request, Jabatan $jabatan)
    {
        // Validasi data yang dikirim oleh form
        $request->validate([
            'name' => 'required|string|max:55',
        ]);

        $jabatan->update($request->all(['name']));

        return redirect()->route('admin.jabatan.index')->with('store', 'Jabatan berhasil diubah');
    }

    public function destroy(Jabatan $jabatan)
    {
        $jabatan->delete();
        return redirect()->route('admin.jabatan.index')->with('destroy', 'Jabatan berhasil dihapus');
    }
}
