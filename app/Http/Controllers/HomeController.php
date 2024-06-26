<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $newss = News::with('user')->orderBy('created_at', 'desc')->paginate(6);
        return view('home', compact('newss'));
    }
}
