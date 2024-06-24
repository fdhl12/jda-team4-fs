<?php

namespace App\Http\Controllers;

use App\Models\Demografi;
use App\Models\DemografiCategories;
use App\Models\ProfileKelurahan;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function indexProfile(ProfileKelurahan $profileKelurahan)
    {
        $tentang = $profileKelurahan->where('type', 'tentang')->value('data');
        $visimisi = $profileKelurahan->where('type', 'visimisi')->value('data');
        $sejarah = $profileKelurahan->where('type', 'sejarah')->value('data');

        return view('admin.profile-kelurahan.index', [
            'tentang' => $tentang,
            'visimisi' => $visimisi,
            'sejarah' => $sejarah,
        ]);
    }

    public function updateProfile(ProfileKelurahan $profileKelurahan, Request $request)
    {
        $request->validate([
            'tentang' => 'required',
            'visimisi' => 'required',
            'sejarah' => 'required',
        ]);

        $profileKelurahan->query()->upsert([
            ['type' => 'tentang', 'data' => $request->tentang],
            ['type' => 'visimisi', 'data' => $request->visimisi],
            ['type' => 'sejarah', 'data' => $request->sejarah],
        ], 'type');

        return redirect()->back()->with('update', 'Profil Berhasil Disimpan');
    }

    /**
     * Proses Geografis
     * ================
     */

    public function indexGeografis(ProfileKelurahan $profileKelurahan)
    {

        $data = json_decode($profileKelurahan->where('type', 'geografis')->value('data'), true);

        return view('admin.geografis.index', [
            'map' => $data['map'],
            'deskripsi' => $data['deskripsi']
        ]);
    }

    public function updateGeografis(ProfileKelurahan $profileKelurahan, Request $request)
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
