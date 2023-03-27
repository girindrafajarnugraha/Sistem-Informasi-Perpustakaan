<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pengembalian extends Model
{
    use HasFactory;

    protected $table = 'pengembalians';
    protected $fillable = [
        '',
    ];

    public static function join(){
        $data = DB::table('pengembalians')
                ->select('pengembalians.*', 'peminjaman.*'. 'petugas.*', 'anggotas.*')
                ->join('peminjaman', 'peminjamans.id', '=', 'pengembalians.id_peminjamans')
                ->join('petugas', 'petugas.id', '=', 'pengembalians.id_petugas')
                ->join('anggotas', 'anggotas.id', '=', 'pengembalian.id_anggotas')
                ->get();
    }
}
