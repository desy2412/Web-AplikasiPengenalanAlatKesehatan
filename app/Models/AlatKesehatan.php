<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlatKesehatan extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_kategori',
        'deskripsi',
        'nama_alat',
        'gambar',
    ];
}
