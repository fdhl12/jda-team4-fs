<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LembagaKelurahanController extends Controller
{
    public function index(){
        return view('lembaga-kelurahan');
    }
}
