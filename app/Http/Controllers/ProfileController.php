<?php

namespace App\Http\Controllers;

use App\Models\ProfileKelurahan;
use Illuminate\Http\Request;

class ProfileKController extends Controller
{
    public function edit($id)
    {
        // Mengambil data Profile dari database
        $profile = ProfileKelurahan::findOrFail($id);

        return view('admin.edit.profile', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang dikirim oleh form
        $request->validate([
            'email' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_telp' => 'required|string|max:255',
        ]);

        // Mengambil data Profile dari database
        $profile = ProfileKelurahan::findOrFail($id);

        // Mengupdate data Profile dengan data baru dari request
        $profile->update($request->all());

        // Redirect ke halaman yang sesuai dengan pesan sukses
        return redirect()->route('admin.dashboard')->with('success', 'Profile updated successfully.');
    }
}
