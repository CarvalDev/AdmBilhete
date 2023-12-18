<?php

namespace App\Models;

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
    ];

    protected $casts = [
        'gratuidadeBilhete' => 'boolean',
        'meiaPassagensBilhete' => 'boolean',
    ];

    public function passageiros(){
       return  $this->belongsTo(Passageiro::class);
    }

    public function passagens(){
       return $this->hasMany(Passagem::class);
    }
}
