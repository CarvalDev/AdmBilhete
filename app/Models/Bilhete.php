<?php

namespace App\Models;

use Database\Factories\BilheteFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bilhete extends Model
{
    use HasFactory;

    protected $fillable = [
        'qrCodeBilhete',
        'numBilhete',
        'tipoBilhete',
        'gratuidadeBilhete',
        'meiaPassagensBilhete',
        'statusBilhete',
        'passageiro_id',
        'created_at'
    ];

    protected $casts = [
        'gratuidadeBilhete' => 'boolean',
        'meiaPassagensBilhete' => 'boolean',
    ];

    public function passageiro(){
       return  $this->belongsTo(Passageiro::class);
    }

    public function passagem(){
       return $this->hasMany(Passagem::class);
    }
    public function compra(){
        return $this->hasMany(Compra::class);
     }
    protected static function newFactory()
    {
        return BilheteFactory::new();
    }
}
