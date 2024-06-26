<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Galeri;
use App\Models\Announcement;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $galeris = Galeri::latest()->paginate(6);
        $announcements = Announcement::latest()->paginate(3);
        $newss = News::latest()->paginate(3);
        return view('home', compact('newss', 'announcements', 'galeris'));
    }
}
