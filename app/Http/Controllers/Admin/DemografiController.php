<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Demografi;
use App\Models\DemografiCategories;
use Illuminate\Http\Request;

class DemografiController extends Controller
{
    public function index()
    {

        $demografis = DemografiCategories::with('kategori')->latest()->paginate(10);
        $categories = Demografi::all();

        return view('admin.demografi.index', [
            'demografis' => $demografis,
            'categories' => $categories
        ]);
    }

    public function store(Request $request, Demografi $demografi)
    {

        $request->validate([
            'kategori' => ['required'],
            'kriteria' => ['required'],
            'jumlah' => ['required'],
        ]);

        $demografi->insert([
            'demografi_categories_id' => $request->kategori,
            'kriteria' => $request->kriteria,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->back()->with('store', 'Data berhasil dibuat');
    }

    public function update(Request $request, Demografi $demografi)
    {

        $request->validate([
            'kategori' => ['required'],
            'kriteria' => ['required'],
            'jumlah' => ['required'],
        ]);

        $demografi->find($request->id)->update([
            'demografi_categories_id' => $request->kategori,
            'kriteria' => $request->kriteria,
            'jumlah' => $request->jumlah,
        ]);

        return redirect()->back()->with('update', 'Data berhasil diubah');
    }

    public function destroy(Demografi $demografi, $id)
    {
        $demografi = $demografi->find($id);
        $demografi->delete();

        return redirect()->back()->with('destroy', "Data {$demografi->kriteria} Berhasil dihapus");
    }
}
