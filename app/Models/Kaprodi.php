<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kaprodi extends Model
{
    use HasFactory;

    // Tentukan nama tabel eksplisit
    protected $table = 'kaprodi';

    protected $fillable = ['gambar', 'nama', 'fakultas', 'prodi'];
}
