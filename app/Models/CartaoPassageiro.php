<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartaoPassageiro extends Model
{
    use HasFactory;
    protected $fillable = [
        'numeroCartao',
        'bandeiraCartao',
        'bancoCartao',
        'cvcCartao',
        'contaCartao',
        'agenciaCartao',
        'validadeCartao',
    ];

    public function passageiro(){
        return $this->belongsTo(Passageiro::class);
    }
}
