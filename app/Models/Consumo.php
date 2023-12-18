<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumo extends Model
{
    use HasFactory;

    public function catracas(){
        return $this->belongsTo(Catraca::class);
    }
    public function passagems(){
        return $this->belongsTo(Passagem::class);
    }

    public function acaos(){
        return $this->belongsTo(Acao::class);
    }
}
