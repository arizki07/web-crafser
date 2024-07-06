<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    public function index()
    {
        $project = ProjectModel::all();
        return view('product.02_manajemen_klien.riwayat', [
            'judul' => 'Halaman Riwayat Klien',
            'project' => $project
        ]);
    }
}
