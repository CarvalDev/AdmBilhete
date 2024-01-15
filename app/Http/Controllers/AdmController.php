<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAdmFormRequest;
use App\Models\Adm;
use Illuminate\Http\Request;

class AdmController extends Controller
{
    public function form(){
        return view('adm.form');
    } 
    public function index(Adm $adm){
        $adms = $adm->all();
        return view('adm.index', compact('adms'));
    }

    public function perfil(){
        return view('adm.perfil');
    }

    public function destroy($id){
        Adm::destroy($id);
        return redirect()->back();
    }

    public function edit($id){
        $adm = Adm::find($id);
        return view('adm.edit', compact('adm'));
    }

    public function store(StoreUpdateAdmFormRequest $request){
        $data = $request->all();
        $data['senhaAdm'] = bcrypt($data['senhaAdm']);
        
         if($request->fotoAdm){
            $data['fotoAdm'] = $request->fotoAdm->store('adm');
         }
         
         Adm::create($data);
         return view('adm.form');
    }
}
