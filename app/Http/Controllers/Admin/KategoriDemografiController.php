<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DemografiCategories;
use Illuminate\Http\Request;

class KategoriDemografiController extends Controller
{

    public function index(DemografiCategories $demografiCategories)
    {

        $demografiCategories = $demografiCategories->latest()->paginate(10);

        return view('admin.kategori-demografi.index', [
            'demografiCategories' => $demografiCategories
        ]);
    }

    public function store(Request $request, DemografiCategories $demografiCategories)
    {

        $request->validate([
            'name' => ['required']
        ]);

        $demografiCategories->insert($request->all(['name']));

        return redirect()->back()->with('store', 'Kategori berhasil dibuat');
    }

    public function update(Request $request, DemografiCategories $demografiCategories)
    {
        $request->validate([
            'name' => ['required']
        ]);

        $demografiCategories->find($request->id)
            ->update($request->all(['name']));

        return redirect()->back()->with('update', 'Kategori berhasil diubah');
    }

    public function destroy(DemografiCategories $demografiCategories, $id)
    {

        $category = $demografiCategories->find($id);
        $category->delete();

        return redirect()->back()->with('destroy', "Kategori {$category->name} Berhasil dihapus");
    }
}
