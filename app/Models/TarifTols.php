<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TarifTols extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'id_tol';

    protected $fillable = [
        'id_tol', 'id_kota', 'gerbangkeluar', 'gol1', 'gol2',
        'gol3', 'gol4', 'gol5', 'gol6', 
    ];

    public function TarifKotas(){
        return $this->belongsTo(TarifKotas::class);
    }
}
