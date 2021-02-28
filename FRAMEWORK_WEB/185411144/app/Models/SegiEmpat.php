<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SegiEmpat extends Model
{
    use HasFactory;

    public $panjang;
    public $lebar;
    /**********************************
     // method menghitung luas segi empat
    **********************************/
    public function luas()
    {
        return $this->panjang * $this->lebar;
    }

    /*****************************************
     // method menghitung keliling segi empat
    ******************************************/
    public function keliling()
    {
        return 2*($this->panjang + $this->lebar);
    } 
}
