<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        return view('galeries.index', compact('galeries', 'query'));
    }

    public function indexAdmin()
    {
        return view('admin.galeri.index');
    }

    public function create()
    {
        return view('galeries.create', compact('galeries'));
    }

    public function store(Request $request)
    {
        // Validasi data masukan
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|string|255',
        ]);

        // Simpan gambar jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('category_images', 'public');
        }

        Galery::create([
            'image' => $imagePath,
            'video' => $request->video,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('galeries.index')->with('success', 'Galery created successfully.');
    }

    public function show($id)
    {
        $Galery = Galery::findOrFail($id);
        $Galery->increment('views');
        $category = $Galery->category;
        return view('galeries.show', compact('galery'));
    }

    public function destroy(Galery $Galery)
    {

        $Galery->delete();
        return redirect()->route('admin.galeries.index')->with('success', 'Galery deleted successfully.');
    }
}
