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
        $galeris = Galeri::latest()->limit(6)->get();
        $announcements = Announcement::latest()->limit(3)->get();
        $layanans = Layanan::latest()->limit(6)->get();
        $newss = News::latest()->limit(3)->get();
        return view('home', compact('newss', 'announcements', 'galeris', 'layanans'));
    }
}
