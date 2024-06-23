<?php

namespace App\Http\Controllers;

use App\Models\Pengaturan;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function __construct()
    {
        /* mendapatkan konfigurasi dari table pengaturan */
        foreach (Pengaturan::all(['type', 'data']) as $read)
        {
            $pengaturan[$read['type']] = $read['data'];
        }
        view()->share('pengaturan', $pengaturan);
    }
}
