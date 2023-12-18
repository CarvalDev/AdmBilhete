<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acao extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipoAcao',
        'dataAcao'
    ];

    public function passageiros(){
        return $this->belongsTo(Passageiro::class);
    }

    public function suportes(){
        return $this->hasOne(Suporte::class);
    }

    public function consumos(){
        return $this->hasOne(Consumo::class);
    }

}
