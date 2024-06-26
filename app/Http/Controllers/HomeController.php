<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Galeri;
use App\Models\Announcement;
use App\Models\Layanan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $galeris = Galeri::latest()->paginate(6);
        $announcements = Announcement::latest()->paginate(3);
        $layanans = Layanan::latest()->paginate(6);
        $newss = News::latest()->paginate(3);
        return view('home', compact('newss', 'announcements', 'galeris', 'layanans'));
    }
}
