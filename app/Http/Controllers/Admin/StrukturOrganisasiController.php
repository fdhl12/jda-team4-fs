<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class StrukturOrganisasiController extends Controller
{
    public function index()
    {
        return view('admin.struktur-organisasi.index');
    }
}
