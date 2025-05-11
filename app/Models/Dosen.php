<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
 // Tentukan nama tabel eksplisit
    protected $table = 'dosen';
    protected $fillable = ['gambar', 'nama', 'prodi', 'nidn', 'email'];
}
