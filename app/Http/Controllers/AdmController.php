<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAdmFormRequest;
use App\Models\Adm;
use Illuminate\Http\Request;

class AdmController extends Controller
{
    public function index(){
        
        return view('adm.form');
    } 
    public function store(StoreUpdateAdmFormRequest $request){
        $data = $request->all();
        $data['senhaAdm'] = bcrypt($data['senhaAdm']);
        //dd($data);
        // if($request->fotoAdm){
        //     $data['fotoAdm'] = $request->fotoAdm->store('adm');
        // }
         Adm::create($data);
         return view('adm.form');
    }
}
