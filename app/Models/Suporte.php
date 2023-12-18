<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suporte extends Model
{
    use HasFactory;

    protected $fillable = [
        'categoriaSuporte',
        'descSuporte'
    ];

    public function acaos(){
        return $this->belongsTo(Acao::class);
    }
}
