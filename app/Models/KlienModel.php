<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KlienModel extends Model
{
    use HasFactory;
    protected $table = 'tb_klien';
    protected $fillable = [
        'nama',
        'kontak',
        'alamat',
        'status',
    ];

    public function projects(): HasMany
    {
        return $this->hasMany(ProjectModel::class, 'id_klien');
    }
}
