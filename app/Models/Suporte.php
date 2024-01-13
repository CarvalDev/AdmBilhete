<?php

namespace App\Models;

use Database\Factories\SuporteFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suporte extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoriaSuporte',
        'descSuporte',
        'statusSuporte'
    ];

    public function acaos(){
        return $this->belongsTo(Acao::class);
    }
    protected static function newFactory()
    {
        return SuporteFactory::new();
    }
}
