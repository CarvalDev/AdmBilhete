<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    protected $fillable = [
        'qtdPassagensCompra',
        'valorTotalCompra'
    ];

    public function forma_pagamentos(){
        return $this->belongsTo(FormaPagamento::class);
    }
}
