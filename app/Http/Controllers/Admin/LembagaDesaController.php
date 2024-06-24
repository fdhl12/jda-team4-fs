<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LembagaDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function Laravel\Prompts\error;

class LembagaDesaController extends Controller
{
    public function index(Request $request, LembagaDesa $lembagaDesa)
    {

        $query = $request->input('query');

        if ($query) {
            $lembagaDesa = $lembagaDesa->where('nama', 'LIKE', "%{$query}%")->get();
        } elseif (request()->get('show') == 'all'){
            $lembagaDesa = LembagaDesa::latest()->get();
        } else {
            $lembagaDesa = $lembagaDesa->latest()->paginate(10);
        }

        return view('admin.lembaga-desa.index', compact('lembagaDesa', 'query'));
    }

    public function store(Request $request, LembagaDesa $lembagaDesa)
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
            $imagePath = $request->file('logo')->store('images/lembaga-desa', 'public');
            $lembaga = array_merge($lembaga, [
                'logo' => $imagePath
            ]);
        }

        $lembagaDesa->create($lembaga);

        return redirect()->back()->with('store', 'Lembaga Desa berhasil ditambah');
    }

    public function update(Request $request, LembagaDesa $lembagaDesa, $id)
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

            $imagePath = $request->file('logo')->store('images/lembaga-desa', 'public');
            $lembaga = array_merge($lembaga, [
                'logo' => $imagePath
            ]);

        }

        $lembagaDesa->update($lembaga);

        return redirect()->back()->with('update', 'Lembaga Desa berhasil diubah');
    }

    public function destroy(Request $request, LembagaDesa $lembagaDesa)
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
