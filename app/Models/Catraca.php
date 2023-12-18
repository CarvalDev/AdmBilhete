<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catraca extends Model
{
    use HasFactory;
    protected $fillable = [
    'linhaCatraca'
    ];

    public function consumos(){
        return $this->hasMany(Consumo::class);
    }
}
