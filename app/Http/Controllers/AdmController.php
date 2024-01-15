<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAdmFormRequest;
use App\Models\Adm;
use Illuminate\Http\Request;

class AdmController extends Controller
{
    
    protected $model;
    public function __construct(Adm $adm)
    {
        $this -> model = $adm;
    }
    public function form(){
        return view('adm.form');
    } 
    public function index(Adm $adm,Request $request){

        $adms = $adm->all();
        $adms = $this->model
        ->getAdm(
         search: $request->search ?? ''
             );
        return view('adm.index', compact('adms'));
    }

    public function perfil(){
        return view('adm.perfil');
    }

    public function destroy($id){
        Adm::destroy($id);
        return redirect()->back();
    }

    public function update($id, Request $request){
        $adm = Adm::find($id);
        $data = $request->all();
        if($request->senhaAdm == ''){
            $data['senhaAdm'] = $adm->senhaAdm;
        }
        if($request->fotoAdm){
            
            $data['fotoAdm'] = $request->fotoAdm->store('adm');
         }
        $adm->update($data);
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
