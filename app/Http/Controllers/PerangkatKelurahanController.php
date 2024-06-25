<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use App\Models\PerangkatKelurahan;

class PerangkatKelurahanController extends Controller
{

    public function index()
    {
        return view('perangkat-kelurahan');
    }

    public function admin(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $perangkatdesas = PerangkatKelurahan::where('name', 'LIKE', "%{$query}%")
                ->orWhere('email', 'LIKE', "%{$query}%")
                ->orWhereHas('jabatan', function ($q) use ($query) {
                    $q->where('id', 'LIKE', "%{$query}%")
                        ->orWhere('name', 'LIKE', "%{$query}%");
                })
                ->orderBy('created_at', 'desc')->get();
        } else {
            $perangkatdesas = PerangkatKelurahan::with('jabatan')->orderBy('created_at', 'desc')->paginate(10);
        }
        $totalPerangkatDesas = PerangkatKelurahan::count();



        return view('admin.perangkat-kelurahan.index', compact('perangkatdesas', 'query', 'totalPerangkatDesas'));
    }

    public function indexUser(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $perangkatdesas = PerangkatKelurahan::where('name', 'LIKE', "%{$query}%")->get();
        } else {
            $perangkatdesas = PerangkatKelurahan::with('jabatan')->orderBy('created_at', 'desc');
        }



        return view('admin.perangkat-kelurahan.index', compact('perangkatdesas', 'query'));
    }

    public function create()
    {
        $jabatans = Jabatan::all();
        return view('admin.perangkat-kelurahan.create', compact('jabatans'));
    }

    public function store(Request $request)
    {
        // Validasi data masukan
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'nip' => 'nullable|string|max:55',
            'alamat' => 'nullable',
            'jabatan_id' => 'required|exists:jabatans,id',
        ]);



        // Simpan gambar jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('jabatan_images', 'public');
        }

        PerangkatKelurahan::create([
            'name' => $request->name,
            'email' => $request->email,
            'image' => $imagePath,
            'nip' => $request->nip,
            'alamat' => $request->alamat,
            'jabatan_id' => $request->jabatan_id,

        ]);

        return redirect()->route('admin.perangkat-kelurahan.index')->with('success', 'PerangkatKelurahan created successfully.');
    }

    public function show($id)
    {
        $perangkatdesa = PerangkatKelurahan::findOrFail($id);

        $jabatan = $perangkatdesa->jabatan;
        return view('admin.perangkat-kelurahan.show', compact('perangkatdesa', 'jabatan'));
    }

    public function edit(PerangkatKelurahan $PerangkatDesa)
    {
        $jabatans = Jabatan::all();
        return view('admin.perangkat-kelurahan.edit', compact('perangkatdesa', 'jabatans'));
    }

    public function update(Request $request, PerangkatKelurahan $PerangkatDesa)
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

        return redirect()->route('admin.perangkat-kelurahan.index')->with('success', 'PerangkatKelurahan updated successfully.');
    }

    public function destroy(PerangkatKelurahan $PerangkatDesa)
    {

        $PerangkatDesa->delete();
        return redirect()->route('admin.perangkat-kelurahan.index')->with('success', 'PerangkatKelurahan deleted successfully.');
    }
}
