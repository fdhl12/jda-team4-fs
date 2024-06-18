<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use App\Models\PerangkatDesa;

class PerangkatDesaController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $perangkatdesas = PerangkatDesa::where('name', 'LIKE', "%{$query}%")
                ->orWhere('email', 'LIKE', "%{$query}%")
                ->orWhereHas('jabatan', function ($q) use ($query) {
                    $q->where('id', 'LIKE', "%{$query}%")
                        ->orWhere('name', 'LIKE', "%{$query}%");
                })
                ->orderBy('created_at', 'desc');
        } else {
            $perangkatdesas = PerangkatDesa::with('perangkatdesa')->orderBy('created_at', 'desc');
        }

        return view('perangkatdesas.index', compact('perangkatdesas', 'query'));
    }

    public function indexAdmin(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $perangkatdesas = PerangkatDesa::where('name', 'LIKE', "%{$query}%")->get();
        } else {
            $perangkatdesas = PerangkatDesa::with('jabatan')->orderBy('created_at', 'desc');
        }



        return view('admin.perangkatdesas', compact('perangkatdesas', 'query'));
    }

    public function create()
    {
        $jabatans = Jabatan::all();
        return view('perangkatdesas.create', compact('jabatans'));
    }

    public function store(Request $request)
    {
        // Validasi data masukan
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'jabatan_id' => 'required|exists:jabatans,id',
            'alamat' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Simpan gambar jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('jabatan_images', 'public');
        }

        PerangkatDesa::create([
            'name' => $request->name,
            'email' => $request->email,
            'jabatan_id' => $request->jabatan_id,
            'alamat' => $request->alamat,
            'image' => $imagePath,
        ]);

        return redirect()->route('perangkatdesas.index')->with('success', 'PerangkatDesa created successfully.');
    }

    public function show($id)
    {
        $perangkatdesa = PerangkatDesa::findOrFail($id);
        $perangkatdesa->increment('views');
        $jabatan = $perangkatdesa->jabatan;
        return view('perangkatdesas.show', compact('perangkatdesa', 'jabatan'));
    }

    public function edit(PerangkatDesa $PerangkatDesa)
    {
        $jabatans = Jabatan::all();
        return view('perangkatdesas.edit', compact('perangkatdesa', 'jabatans'));
    }

    public function update(Request $request, PerangkatDesa $PerangkatDesa)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'jabatan_id' => 'required|exists:jabatans,id',
            'alamat' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('jabatan_images', 'public');
        }

        $PerangkatDesa->update([
            'name' => $request->name,
            'email' => $request->email,
            'jabatan_id' => $request->jabatan_id,
            'alamat' => $request->alamat,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.perangkatdesas.index')->with('success', 'PerangkatDesa updated successfully.');
    }

    public function destroy(PerangkatDesa $PerangkatDesa)
    {

        $PerangkatDesa->delete();
        return redirect()->route('admin.perangkatdesas.index')->with('success', 'PerangkatDesa deleted successfully.');
    }
}
