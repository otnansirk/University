<?php

namespace App\Models;

use App\Models\Propinsi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kota extends Model
{
    use HasFactory;

    protected $table = 'kota';

    protected $fillable = [
        'id', 
        'id_propinsi',
        'nama_kota'
    ];

    public function propinsi()
    {
        return $this->belongsTo(Propinsi::class, 'id_propinsi', 'id');
    }
}
