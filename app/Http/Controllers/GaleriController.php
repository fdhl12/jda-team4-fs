<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    public function index()
    {
        $galeris = Galeri::latest()->paginate(6);
        return view('galeri', [
            'galeris' => $galeris
        ]);
    }

    public function admin(Request $request, Galeri $galeries)
    {
        $query = $request->input('query');

        $galeries = $galeries->with('user');

        if ($query) {
            $galeries = $galeries->where('description', 'LIKE', "%{$query}%")->get();
        } elseif (request()->get('show') == 'all'){
            $galeries = Galeri::with('user')->latest()->get();
        } else {
            $galeries = $galeries->latest()->paginate(10);
        }

        return view('admin.galeri.index', compact('galeries', 'query'));
    }

    public function store(Request $request, Galeri $galeri)
    {

        $request->validate([
            'images.*' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'nullable',
        ]);

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            foreach ($images as $image)
            {
                $imagePath = $image->store('images/galeri', 'public');

                $galeri->create([
                    'image' => $imagePath,
                    'description' => $request->description,
                    'user_id' => Auth::id(),
                ]);
            }
        }

        return redirect()->back()->with('store', 'Gambar berhasil ditambah');
    }

    public function update(Request $request, Galeri $galeri)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'nullable',
        ]);

        $update = [
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {
            /* delete previous photo */
            $storage = Storage::disk('public');
            if ($galeri->getRawOriginal('image') and $storage->exists($galeri->getRawOriginal('image'))) {
                $storage->delete($galeri->getRawOriginal('image'));
            }

            $imagePath = $request->file('image')->store('images/galeri', 'public');

            $update = array_merge($update, [
                'image' => $imagePath,
            ]);
        }

        $galeri->update($update);

        return redirect()->back()->with('update', 'Gambar berhasil diubah');
    }

    public function destroy(Galeri $galeri)
    {

        /* delete image*/
        $storage = Storage::disk('public');
        if ($galeri->getRawOriginal('image') and $storage->exists($galeri->getRawOriginal('image'))) {
            $storage->delete($galeri->getRawOriginal('image'));
        }

        $galeri->delete();

        return redirect()->back()->with('destroy', "Gambar berhasil dihapus.");
    }

}
