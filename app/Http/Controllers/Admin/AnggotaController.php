<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('product.03_manajemen_tim.anggota', [
            'judul' => 'Halaman Anggota Web Crafser',
            'users' => $users
        ]);
    }
}
