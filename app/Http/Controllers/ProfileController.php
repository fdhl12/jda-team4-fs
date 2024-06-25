<?php

namespace App\Http\Controllers;

use App\Models\Demografi;
use App\Models\DemografiCategories;
use App\Models\ProfileKelurahan;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function tentang()
    {
        return view('tentang');
    }

    public function visimisi()
    {
        return view('visimisi');
    }

    public function sejarah()
    {
        return view('sejarah');
    }
    public function geografi()
    {
        return view('geografi');
    }

    public function demografi()
    {
        return view('demografi');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function indexProfile(ProfileKelurahan $profileKelurahan)
    {
        $tentang = $profileKelurahan->where('type', 'tentang')->value('data');
        $visimisi = $profileKelurahan->where('type', 'visimisi')->value('data');
        $sejarah = $profileKelurahan->where('type', 'sejarah')->value('data');
        $kontak = json_decode($profileKelurahan->where('type', 'kontak')->value('data'), true);
        $sosial_media = json_decode($profileKelurahan->where('type', 'sosial_media')->value('data'), true);

        return view('admin.profile-kelurahan.index', [
            'tentang' => $tentang,
            'visimisi' => $visimisi,
            'sejarah' => $sejarah,
            'kontak' => $kontak,
            'sosial_media' => $sosial_media,
        ]);
    }

    public function updateProfile(ProfileKelurahan $profileKelurahan, Request $request)
    {
        $request->validate([
            'tentang' => 'required',
            'visimisi' => 'required',
            'sejarah' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
        ]);

        $kontak = json_encode([
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
        ]);

        $sosial_media = json_encode([
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
        ]);

        $profileKelurahan->query()->upsert([
            ['type' => 'tentang', 'data' => $request->tentang],
            ['type' => 'visimisi', 'data' => $request->visimisi],
            ['type' => 'sejarah', 'data' => $request->sejarah],
            ['type' => 'kontak', 'data' => $kontak],
            ['type' => 'sosial_media', 'data' => $sosial_media],
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
