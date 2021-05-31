<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    use HasFactory;

    protected $table = 'tarif';
    protected $primarykey = 'id';

    /**
     * Get all of the tarifKotas for the Tarif
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingate()
    {
        return $this->hasMany(Gate::class, 'id', 'masuk');
    }
    public function outgate()
    {
        return $this->hasMany(Gate::class, 'id', 'keluar');
    }
}
