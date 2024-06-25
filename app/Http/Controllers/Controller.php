<?php

namespace App\Http\Controllers;

use App\Models\Pengaturan;
use App\Models\ProfileKelurahan;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function __construct()
    {

        /* mendapatkan konfigurasi dari table pengaturan */
        foreach (Pengaturan::all() as $read)
        {
            $pengaturan[$read['type']] = $read['data'];
        }
        view()->share('pengaturan', $pengaturan);

        /* mendapatkan data profile dari table profile */
        foreach (ProfileKelurahan::all() as $read)
        {
            if (in_array($read['type'], ['kontak', 'geografis', 'sosial_media'])) {
                $read['data'] = json_decode($read['data'], true);
            }
            $profile[$read['type']] = $read['data'];
        }
        view()->share('profile', $profile);
    }
}
