<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('product.utama.index', [
            'active' => 'Home',
            'judul' => 'Jasa Pembuatan Website'
        ]);
    }

    public function about()
    {
        return view('product.utama.about', [
            'active' => 'About',
            'judul' => 'Tentang Kami'
        ]);
    }

    public function project()
    {
        return view('product.utama.project', [
            'judul' => 'Project Kami',
            'active' => 'Project'
        ]);
    }

    public function team()
    {
        return view('product.utama.team', [
            'judul' => 'Team Developers',
            'active' => 'Team'
        ]);
    }

    public function contact()
    {
        return view('product.utama.kontak', [
            'judul' => 'Hubungi Kami',
            'active' => 'Contact'
        ]);
    }
}
