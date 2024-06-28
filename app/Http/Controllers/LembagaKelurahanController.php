<?php

namespace App\Http\Controllers;

use App\Models\LembagaKelurahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LembagaKelurahanController extends Controller
{
    public function index()
    {
        return view('lembaga-kelurahan');
    }

    public function indexUser()
    {
        $lembagas = LembagaKelurahan::all();
        return view('lembaga-kelurahan', compact('lembagas'));
    }

    public function showUser($id)
    {
        $lembaga = LembagaKelurahan::findOrFail($id);
        $lembagas = LembagaKelurahan::all();
        return view('show.lembaga-kelurahan', compact('lembagas', 'lembaga'));
    }

    public function admin(Request $request, LembagaKelurahan $lembagaKelurahan)
    {

        $query = $request->input('query');

        if ($query) {
            $lembagaKelurahan = $lembagaKelurahan->where('nama', 'LIKE', "%{$query}%")->get();
        } elseif (request()->get('show') == 'all'){
            $lembagaKelurahan = LembagaKelurahan::latest()->get();
        } else {
            $lembagaKelurahan = $lembagaKelurahan->latest()->paginate(10);
        }

        return view('admin.lembaga-kelurahan.index', compact('lembagaKelurahan', 'query'));
    }

    public function store(Request $request, LembagaKelurahan $lembagaKelurahan)
    {

        $request->validate([
            'nama' => ['required'],
            'kode' => ['required'],
            'hukum' => ['nullable'],
            'alamat' => ['nullable'],
            'logo' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
        ]);


        $lembaga = $request->all(['nama', 'kode', 'hukum', 'alamat']);

        /* check if logo exist*/
        if ($request->hasFile('logo'))
        {
            $imagePath = $request->file('logo')->store('images/lembaga-kelurahan', 'public');
            $lembaga = array_merge($lembaga, [
                'logo' => $imagePath
            ]);
        }

        $lembagaKelurahan->create($lembaga);

        return redirect()->back()->with('store', 'Lembaga Kelurahan berhasil ditambah');
    }

    public function update(Request $request, LembagaKelurahan $lembagaKelurahan)
    {

        $request->validate([
            'nama' => ['required'],
            'kode' => ['required'],
            'hukum' => ['nullable'],
            'alamat' => ['nullable'],
            'logo' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
        ]);

        $lembaga = $request->all(['nama', 'kode', 'hukum', 'alamat']);

        /* check if logo exist*/
        if ($request->hasFile('logo'))
        {
            /* delete provious logo */
            $storage = Storage::disk('public');
            if ($lembagaKelurahan->logo AND $storage->exists($lembagaKelurahan->logo)){
                $storage->delete($lembagaKelurahan->logo);
            }

            $imagePath = $request->file('logo')->store('images/lembaga-kelurahan', 'public');
            $lembaga = array_merge($lembaga, [
                'logo' => $imagePath
            ]);

        }

        $lembagaKelurahan->update($lembaga);

        return redirect()->back()->with('update', 'Lembaga Kelurahan berhasil diubah');
    }

    public function destroy(LembagaKelurahan $lembagaKelurahan)
    {

        /* delete image*/
        $storage = Storage::disk('public');
        if ($lembagaKelurahan->logo AND $storage->exists($lembagaKelurahan->logo)){
            $storage->delete($lembagaKelurahan->logo);
        }

        $lembagaKelurahan->delete();

        return redirect()->back()->with('destroy', "Lembaga {$lembagaKelurahan['title']} berhasil dihapus.");
    }
}
