<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Adm extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'nomeAdm',
        'emailAdm',
        'password',
        'fotoAdm',
    ];

    protected $hidden = [
        'password',
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
