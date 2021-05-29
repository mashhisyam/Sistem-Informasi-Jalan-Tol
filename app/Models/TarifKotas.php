<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TarifKotas extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'id_kota';

    protected $fillable = [
        'id_kota', 'nama_kota'
    ];

    public function TarifTols(){
        return $this->hasMany(TarifTols::class);
    }
}
