<?php

namespace App\Http\Controllers;

use App\Models\LembagaKelurahan;
use Illuminate\Http\Request;

class LembagaKelurahanController extends Controller
{
    public function index()
    {
        return view('lembaga-kelurahan');
    }

    public function indexUser()
    {
        $lembagas = LembagaKelurahan::all();
        return view('lembaga-kelurahan', compact('lembagas'));
    }

    public function showUser($id)
    {
        $lembaga = LembagaKelurahan::findOrFail($id);
        $lembagas = LembagaKelurahan::all();
        return view('show.lembaga-kelurahan', compact('lembagas', 'lembaga'));
    }
}
