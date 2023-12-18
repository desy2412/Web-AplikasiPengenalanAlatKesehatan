<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori1 extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'icon',
        'nama_kategori',
    ];
}
