<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KlienModel;
use Illuminate\Http\Request;

class KlienController extends Controller
{
    public function index()
    {
        $klien = KlienModel::all();
        return view('product.02_manajemen_klien.d_klien', [
            'judul' => 'Halaman Klien',
            'klien' => $klien,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kontak' => 'required',
            'alamat' => 'required'
        ]);

        $klien = new KlienModel();
        $klien->nama = $request->input('nama');
        $klien->kontak = $request->input('kontak');
        $klien->alamat = $request->input('alamat');
        if ($klien->save()) {
            return redirect()->back()->with('success', 'Data klien berhasil di tambahkan');
        } else {
            return redirect()->back()->with('error', 'Data klien gagal di tambahkan, silahkan coba kembali');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'kontak' => 'required',
            'alamat' => 'required'
        ]);

        $klien = KlienModel::find($id);
        $klien->nama = $request->input('nama');
        $klien->kontak = $request->input('kontak');
        $klien->alamat = $request->input('alamat');
        if ($klien->save()) {
            return redirect()->back()->with('success', 'Data klien berhasil di update');
        } else {
            return redirect()->back()->with('error', 'Data klien gagal di update, silahkan coba kembali');
        }
    }


    public function destroy($id)
    {
        $klien = KlienModel::find($id);

        if ($klien->delete()) {
            return redirect()->back()->with('success', 'Data klien berhasil di hapus');
        } else {
            return redirect()->back()->with('error', 'Data klien berhasil di hapus, silahkan coba kembali');
        }
    }
}
