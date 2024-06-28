<?php

namespace App\Http\Controllers;

use App\Models\ProfileKelurahan;
use Illuminate\Http\Request;

class GeografisController extends Controller
{

    public function admin(ProfileKelurahan $profileKelurahan)
    {

        $data = json_decode($profileKelurahan->where('type', 'geografis')->value('data'), true);

        return view('admin.geografis.index', [
            'map' => $data['map'],
            'deskripsi' => $data['deskripsi']
        ]);
    }

    public function update(ProfileKelurahan $profileKelurahan, Request $request)
    {
        $request->validate([
            'map' => 'required',
            'deskripsi' => 'required',
        ]);

        $profileKelurahan->where('type', 'geografis')->update([
            'data' => json_encode($request->all(['map', 'deskripsi']))
        ]);

        return redirect()->back()->with('update', 'Geografis Berhasil Disimpan');
    }
}
