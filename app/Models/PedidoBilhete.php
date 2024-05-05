<?php

namespace App\Models;

use Database\Factories\PedidoBilheteFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoBilhete extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipoBilhete',
        'statusPedido',
        'passageiro_id',
        'created_at'
    ];
    protected static function newFactory()
    {
        return PedidoBilheteFactory::new();
    }
}
