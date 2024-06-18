<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    // Untuk pengguna umum
    public function index()
    {

        $socials = SocialMedia::all();
        return view('admin.index.socialmedias', compact('socials'));
    }
    // Method untuk menampilkan form pembuatan SocialMedia baru
    public function create()
    {
        return view('admin.create.socialmedia');
    }
    public function store(Request $request)
    {
        // Validasi data masukan
        $request->validate([
            'name' => 'required|string|max:55',
            'link' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
        ]);

        SocialMedia::create([
            'name' => $request->name,
            'link' => $request->link,
            'icon' => $request->icon,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Content created successfully.');
    }

    // Method untuk menampilkan form pengeditan SocialMedia
    public function edit($id)
    {
        // Mengambil data SocialMedia dari database
        $socialmedia = SocialMedia::findOrFail($id);

        // Mengirim data ke view untuk ditampilkan dalam form pengeditan
        return view('admin.edit.socialmedia', compact('socialmedia'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang dikirim oleh form
        $request->validate([
            'name' => 'required|string|max:255',
            'link' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
        ]);

        // Mengambil data SocialMedia dari database
        $socialmedia = SocialMedia::findOrFail($id);

        // Mengupdate data SocialMedia dengan data baru dari request
        $socialmedia->update($request->all());

        // Redirect ke halaman yang sesuai dengan pesan sukses
        return redirect()->route('admin.dashboard')->with('success', 'socialmedia updated successfully.');
    }

    public function destroy(SocialMedia $SocialMedia)
    {

        $SocialMedia->delete();
        return redirect()->route('admin.dashboard')->with('success', 'socialmedia deleted successfully.');
    }
}
