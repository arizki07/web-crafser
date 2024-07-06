<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProjectModel extends Model
{
    use HasFactory;
    protected $table = 'tb_project';
    protected $fillable = [
        'id_klien',
        'nama_project',
        'deskripsi',
        'tanggal_mulai',
        'tanggal_selesai',
        'status',
    ];

    public function klien(): BelongsTo
    {
        return $this->belongsTo(KlienModel::class, 'id_klien');
    }
}
