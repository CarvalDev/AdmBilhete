<?php

namespace App\Models;

use Database\Factories\LinhaFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Linha extends Model
{
    use HasFactory;
    protected $fillable = [
        'numLinha',
        'nomeLinha'
    ];

    public function carros(){
        return $this->hasMany(Carro::class);
    }
    protected static function newFactory()
    {
        return LinhaFactory::new();
    }
}
