<?php

namespace App\Http\Controllers;

use App\Models\ProfileKelurahan;
use Illuminate\Http\Request;

class StrukturOrganisasiController extends Controller
{

    public function index(ProfileKelurahan $profileKelurahan){
        $strukturOrganisasi = $profileKelurahan->where('type', 'struktur_organisasi')->value('data');
        return view('struktur-organisasi', compact('strukturOrganisasi'));
    }

    public function admin(ProfileKelurahan $profileKelurahan)
    {

        $strukturOrganisasi = $profileKelurahan->where('type', 'struktur_organisasi')->value('data');

        return view('admin.struktur-organisasi.index', [
            'strukturOrganisasi' => $strukturOrganisasi,
        ]);
    }

    public function update(Request $request, ProfileKelurahan $profileKelurahan)
    {
        $request->validate([
            'struktur_organisasi' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        /* check if struktur_organisasi has changed */
        if ($request->hasFile('struktur_organisasi'))
        {
            $struktur_organisasi = $request->file('struktur_organisasi');

            $struktur_organisasi_path = $struktur_organisasi->storePubliclyAs('/', 'struktur-organisasi.'. $struktur_organisasi->getClientOriginalExtension(), 'public');

            $update = [
                ['type' => 'struktur_organisasi', 'data' => 'storage/'. $struktur_organisasi_path],
            ];

            $profileKelurahan->query()->upsert($update, 'type');
        }


        return redirect()->back()->with('update', 'Struktur Organisasi berhasil diubah');
    }
}
