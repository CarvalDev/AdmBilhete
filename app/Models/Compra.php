<?php

namespace App\Models;

use Database\Factories\CompraFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    protected $fillable = [
        'qtdPassagensCompra',
        'valorTotalCompra',
        'bilhete_id'
    ];

    public function formaPagamento(){
        return $this->belongsTo(FormaPagamento::class);
    }

    public function acao(){
        return $this->belongsTo(Acao::class);
    }
    public function bilhete(){
        return  $this->belongsTo(Bilhete::class);
     }

    protected static function newFactory()
    {
        return CompraFactory::new();
    }
}
