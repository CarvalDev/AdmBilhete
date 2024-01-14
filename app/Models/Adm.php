<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adm extends Model
{
    protected $fillable = [
        'nomeAdm',
        'emailAdm',
        'senhaAdm',
        'fotoAdm',
    ];

    protected $hidden = [
        'senhaAdm',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
