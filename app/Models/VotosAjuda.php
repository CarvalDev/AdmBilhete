<?php

namespace App\Models;


use Database\Factories\VotosAjudaFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VotosAjuda extends Model
{
    use HasFactory;
    protected $fillable = [ 
        'util',
        'ajuda_id'
    ];
    protected static function newFactory()
    {
        return VotosAjudaFactory::new();
    }
}
