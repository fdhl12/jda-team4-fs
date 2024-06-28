<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Galeri;
use App\Models\News;

class BerandaController extends Controller
{
    public function index()
    {
        return view('admin.beranda.index', [
            'totalBerita' => News::count(),
            'totalPengumuman' => Announcement::count(),
            'totalGaleri' => Galeri::count(),
        ]);
    }
}
