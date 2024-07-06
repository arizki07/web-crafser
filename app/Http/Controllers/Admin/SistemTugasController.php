<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SistemTugasController extends Controller
{
    public function index()
    {
        return view('product.01_manajemen_proyek.sistem_tugas', [
            'judul' => 'Halaman sistem tugas',
        ]);
    }
}
