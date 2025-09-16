<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Method untuk menampilkan halaman beranda
    public function beranda()
    {
        return view('pages.beranda');
    }
}