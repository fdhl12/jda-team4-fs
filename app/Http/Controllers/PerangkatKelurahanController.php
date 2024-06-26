<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use App\Models\PerangkatKelurahan;
use Illuminate\Support\Facades\Storage;

class PerangkatKelurahanController extends Controller
{

//    public function index()
//    {
//        return view('perangkat-kelurahan');
//    }

    public function index(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $perangkatKelurahans = PerangkatKelurahan::where('name', 'LIKE', "%{$query}%")
                ->orWhere('email', 'LIKE', "%{$query}%")
                ->orWhereHas('jabatan', function ($q) use ($query) {
                    $q->where('id', 'LIKE', "%{$query}%")
                        ->orWhere('name', 'LIKE', "%{$query}%");
                })
                ->orderBy('created_at', 'desc')->get();
        } else {
            $perangkatKelurahans = PerangkatKelurahan::with('jabatan')->orderBy('created_at', 'desc')->paginate(10);
        }

        $jabatan = Jabatan::all();

        return view('admin.perangkat-kelurahan.index', compact('perangkatKelurahans', 'jabatan', 'query'));
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
            'jabatan_id' => 'required|exists:jabatans,id',
            'nip' => 'nullable|string|max:55',
            'email' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'alamat' => 'nullable',
        ]);



        // Simpan gambar jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images/perangkat-kelurahan', 'public');
        }

        PerangkatKelurahan::create([
            'name' => $request->name,
            'jabatan_id' => $request->jabatan_id,
            'nip' => $request->nip,
            'email' => $request->email,
            'image' => $imagePath,
            'alamat' => $request->alamat,

        ]);

        return redirect()->route('admin.perangkat-kelurahan.index')->with('store', 'Perangkat Kelurahan Berhasil ditambah');
    }

    public function show($id)
    {
        $perangkatdesa = PerangkatKelurahan::findOrFail($id);

        $jabatan = $perangkatdesa->jabatan;
        return view('admin.perangkat-kelurahan.show', compact('perangkatdesa', 'jabatan'));
    }

    public function edit(PerangkatKelurahan $perangkatKelurahan)
    {
        $jabatans = Jabatan::all();
        return view('admin.perangkat-kelurahan.edit', compact('perangkatdesa', 'jabatans'));
    }

    public function update(Request $request, PerangkatKelurahan $perangkatKelurahan)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'jabatan_id' => 'required|exists:jabatans,id',
            'nip' => 'nullable|string|max:55',
            'email' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'alamat' => 'nullable',
        ]);

        $update = [
            'name' => $request->name,
            'jabatan_id' => $request->jabatan_id,
            'nip' => $request->nip,
            'email' => $request->email,
            'alamat' => $request->alamat,
        ];

        if ($request->hasFile('image')) {

            /* delete previous photo */
            $storage = Storage::disk('public');
            if ($perangkatKelurahan->getRawOriginal('image') and $storage->exists($perangkatKelurahan->getRawOriginal('image'))) {
                $storage->delete($perangkatKelurahan->getRawOriginal('image'));
            }

            $imagePath = $request->file('image')->store('images/perangkat-kelurahan', 'public');

            $update = array_merge($update, [
                'image' => $imagePath
            ]);
        }

        $perangkatKelurahan->update($update);

        return redirect()->route('admin.perangkat-kelurahan.index')->with('update', 'Perangkat Kelurahan Berhasil disimpan');
    }

    public function destroy(PerangkatKelurahan $perangkatKelurahan)
    {

        /* delete image*/
        $storage = Storage::disk('public');
        if ($perangkatKelurahan->getRawOriginal('image') and $storage->exists($perangkatKelurahan->getRawOriginal('image'))) {
            $storage->delete($perangkatKelurahan->getRawOriginal('image'));
        }

        $perangkatKelurahan->delete();
        return redirect()->route('admin.perangkat-kelurahan.index')->with('destroy', 'Perangkat Kelurahan Berhasil dihapus.');
    }
}
