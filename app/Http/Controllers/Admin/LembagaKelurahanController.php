<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LembagaKelurahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function Laravel\Prompts\error;

class LembagaKelurahanController extends Controller
{
    public function index(Request $request, LembagaKelurahan $lembagaDesa)
    {

        $query = $request->input('query');

        if ($query) {
            $lembagaDesa = $lembagaDesa->where('nama', 'LIKE', "%{$query}%")->get();
        } elseif (request()->get('show') == 'all'){
            $lembagaDesa = LembagaKelurahan::latest()->get();
        } else {
            $lembagaDesa = $lembagaDesa->latest()->paginate(10);
        }

        return view('admin.lembaga-kelurahan.index', compact('lembagaDesa', 'query'));
    }

    public function store(Request $request, LembagaKelurahan $lembagaDesa)
    {

        $request->validate([
            'nama' => ['required'],
            'kode' => ['required'],
            'hukum' => ['nullable'],
            'alamat' => ['required'],
            'logo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
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

        $lembagaDesa->create($lembaga);

        return redirect()->back()->with('store', 'Lembaga Kelurahan berhasil ditambah');
    }

    public function update(Request $request, LembagaKelurahan $lembagaDesa, $id)
    {

        $request->validate([
            'nama' => ['required'],
            'kode' => ['required'],
            'hukum' => ['nullable'],
            'alamat' => ['required'],
            'logo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ]);

        $lembaga = $request->all(['nama', 'kode', 'hukum', 'alamat']);

        $lembagaDesa = $lembagaDesa->find($id);

        /* check if logo exist*/
        if ($request->hasFile('logo'))
        {
            /* delete provious logo */
            $storage = Storage::disk('public');
            if ($lembagaDesa->logo AND $storage->exists($lembagaDesa->logo)){
                $storage->delete($lembagaDesa->logo);
            }

            $imagePath = $request->file('logo')->store('images/lembaga-kelurahan', 'public');
            $lembaga = array_merge($lembaga, [
                'logo' => $imagePath
            ]);

        }

        $lembagaDesa->update($lembaga);

        return redirect()->back()->with('update', 'Lembaga Kelurahan berhasil diubah');
    }

    public function destroy(Request $request, LembagaKelurahan $lembagaDesa)
    {

        $lembagaDesa = $lembagaDesa->find($request->id);

        /* delete image*/
        $storage = Storage::disk('public');
        if ($lembagaDesa->logo AND $storage->exists($lembagaDesa->logo)){
            $storage->delete($lembagaDesa->logo);
        }

        $lembagaDesa->delete();

        return redirect()->back()->with('destroy', "Lembaga {$lembagaDesa['title']} berhasil dihapus.");
    }
}
