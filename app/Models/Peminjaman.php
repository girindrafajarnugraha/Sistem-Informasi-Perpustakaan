<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';
    protected $fillable = [
        'id',
        'kode_pinjam',
        'lama_pinjam',
        'tanggal_pinjam',
        'tanggal_kembali',
        // 'keterangan',
        'id_petugas',
        'id_bukus',
        'id_anggotas',
    ];
}
