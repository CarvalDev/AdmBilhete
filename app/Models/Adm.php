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
    public function getAdm(String | null $search = null)
    {
        $adms = $this->where(function($query) use ($search){
            if($search)
            {
            
            $query->where('nomeAdm','LIKE',"%{$search}%");
            $query->orWhere('emailAdm','LIKE',"%{$search}%");
            }
        })->get();     


        return $adms;
        
    }
}
