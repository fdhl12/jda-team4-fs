<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Galeri;
use App\Models\News;
use Illuminate\Http\Request;

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
