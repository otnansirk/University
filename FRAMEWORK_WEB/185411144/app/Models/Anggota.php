<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id', 
        'nama',
        'jenis_kel', 
        'alamat',
        'telepon', 
        'e_mail', 
        'foto',
        'tanggal_lhr'
    ];
}
