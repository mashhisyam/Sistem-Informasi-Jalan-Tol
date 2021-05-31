<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gate extends Model
{
    use HasFactory;

    protected $table = 'gate';

    public function tarifin()
    {
        return $this->belongsTo(Tarif::class, 'masuk');
    }
    public function tarifout()
    {
        return $this->belongsTo(Tarif::class, 'keluar');
    }
}
