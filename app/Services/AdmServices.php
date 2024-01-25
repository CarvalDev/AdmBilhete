<?php

namespace App\Services;

use App\Mail\RespostaSuporteMail;
use App\Repositories\Contracts\AdmRepositoryInterface;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class AdmServices
{
    public function login($request){
        $credentials = [
            'emailAdm' => $request['emailAdm'],
            'password' => $request['password'],
        ];
        try{
            Auth::guard('adm')->attempt($credentials);
            if(Auth::guard('adm')->check()){
                $request->session()->regenerate();
                return true;
            }else{
                return false;
            }
        }catch(Exception $e){
            return $e->getMessage();
        }
    }
    public function logout($request){
        Auth::guard('adm')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }
    public function dataQualityUpdate($request, $adm){
        
        $data = $request->all();
        if($request->senhaAdm != ''){
            $data['password'] = bcrypt($data['senhaAdm']);
        }
        if($request->fotoAdm){
            if($adm->fotoAdm && Storage::exists($adm->fotoAdm)){
                Storage::delete($adm->fotoAdm);
            }
            $data['fotoAdm'] = $request->fotoAdm->store('adm');
        }
        return $data;
    }
    public function dataQualityStore($request){
        $data = $request->all();
        $data['password'] = bcrypt($data['senhaAdm']);
         if($request->fotoAdm){
            $data['fotoAdm'] = $request->fotoAdm->store('adm');
         }
         return $data;
    }

    public function emailSuporte($email, $mensagem, $idSuporte, $nomePassageiro,$descSuporte, $categoriaSuporte){
        Mail::to($email)
        ->send(new RespostaSuporteMail($mensagem, $idSuporte, $nomePassageiro,$descSuporte, $categoriaSuporte));
    }
}