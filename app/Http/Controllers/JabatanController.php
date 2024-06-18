<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index()
    {

        $jabatans = Jabatan::all();
        return view('jabatans', compact('jabatans'));
    }

    public function show($id)
    {
        $jabatan = Jabatan::with(['jabatan'])->findOrFail($id);

        return view('jabatan', compact('jabatan'));
    }

    public function indexAdmin(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $jabatans = Jabatan::where('name', 'LIKE', "%{$query}%")->get();
        } else {
            $jabatans = Jabatan::all();
        }
        return view('admin.jabatans', compact('jabatans', 'query'));
    }

    public function showAdmin($id)
    {

        $jabatan = Jabatan::with('perangkat_desas.user')->findOrFail($id);
        $perangkat_desas = $jabatan->perangkat_desas;

        return view('admin.show.jabatan', compact('jabatan', 'perangkat_desas'));
    }
    public function create()
    {
        return view('admin.create.jabatan');
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

        return redirect()->route('jabatans.index')->with('success', 'Content created successfully.');
    }

    public function edit($id)
    {
        $jabatan = Jabatan::findOrFail($id);

        // Mengirim data ke view untuk ditampilkan dalam form pengeditan
        return view('admin.edit.jabatan', compact('jabatan'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang dikirim oleh form
        $request->validate([
            'name' => 'required|string|max:55',
        ]);

        $jabatan = Jabatan::findOrFail($id);

        $jabatan->update($request->all());

        return redirect()->route('jabatans.index')->with('success', 'jabatan updated successfully.');
    }

    public function destroy(Jabatan $jabatan)
    {
        $jabatan->delete();
        return redirect()->route('jabatans.index')->with('success', 'jabatan deleted successfully.');
    }
}
