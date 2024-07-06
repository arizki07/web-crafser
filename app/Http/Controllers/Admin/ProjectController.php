<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\KlienModel;
use App\Models\ProjectModel;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $project = ProjectModel::all();
        $klien = KlienModel::all();

        // dd($klien)
        return view('product.01_manajemen_proyek.project', [
            'judul' => 'Halaman Project',
            'project' => $project,
            'klien' => $klien,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_klien' => 'required',
            'nama_project' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'deskripsi' => 'required',
        ]);

        $project = new ProjectModel();
        $project->id_klien = $request->input('id_klien');
        $project->nama_project = $request->input('nama_project');
        $project->tanggal_mulai = $request->input('tanggal_mulai');
        $project->tanggal_selesai = $request->input('tanggal_selesai');
        $project->deskripsi = $request->input('deskripsi');
        $project->status = 'PENDING';

        if ($project->save()) {
            return redirect()->back()->with('success', 'Data project berhasil ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Data project gagal di tambahkan, silahkan coba kembali');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_klien' => 'required',
            'nama_project' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'deskripsi' => 'required',
        ]);

        $project = ProjectModel::find($id);
        $project->id_klien = $request->input('id_klien');
        $project->nama_project = $request->input('nama_project');
        $project->tanggal_mulai = $request->input('tanggal_mulai');
        $project->tanggal_selesai = $request->input('tanggal_selesai');
        $project->deskripsi = $request->input('deskripsi');
        $project->status = 'PENDING';

        if ($project->save()) {
            return redirect()->back()->with('success', 'Data project berhasil ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Data project gagal di tambahkan, silahkan coba kembali');
        }
    }

    public function destroy($id)
    {
        $project = ProjectModel::find($id);
        if ($project->delete()) {
            return redirect()->back()->with('success', 'Data project berhasil di hapus');
        } else {
            return redirect()->back()->with('error', 'Data project gagal di hapus, silahkan coba kembali');
        }
    }

    //Proses
    public function updateStatus(Request $request, $id)
    {
        $project = ProjectModel::find($id);

        if (!$project) {
            return redirect()->back()->with('error', 'Project tidak ditemukan');
        }

        $status = $request->input('status');

        // Validasi status agar hanya menerima nilai yang diizinkan
        if (!in_array($status, ['Progres', 'Complete', 'Hold', 'Cancel'])) {
            return redirect()->back()->with('error', 'Status tidak valid');
        }

        $project->status = strtoupper($status);

        if ($project->save()) {
            return redirect()->back()->with('success', 'Status project berhasil diperbarui');
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui status project, silahkan coba kembali');
        }
    }
}
