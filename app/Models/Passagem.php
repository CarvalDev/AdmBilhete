<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passagem extends Model
{
    use HasFactory;
    protected $fillable = [
        'statusPassagem',
        'tempoRestantePassagem',
    ];
    public function bilhete(){
        return $this->belongsTo(Bilhete::class);
    }

    public function consumos(){
        return $this->hasMany(Consumo::class);
    }
}
