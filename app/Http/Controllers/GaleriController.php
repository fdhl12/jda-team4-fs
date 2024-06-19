<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GaleriController extends Controller
{
    public function index(Request $request)
    {
        return view('galeries.index', compact('galeries', 'query'));
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

        Galeri::create([
            'image' => $imagePath,
            'video' => $request->video,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('galeries.index')->with('success', 'Galeri created successfully.');
    }

    public function show($id)
    {
        $galeri = Galeri::findOrFail($id);
        $galeri->increment('views');
        return view('galeries.show', compact('galeri'));
    }

    public function destroy(Galeri $Galeri)
    {

        $Galeri->delete();
        return redirect()->route('admin.galeries.index')->with('success', 'Galeri deleted successfully.');
    }
}
