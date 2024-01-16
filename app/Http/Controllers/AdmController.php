<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAdmFormRequest;
use App\Models\Adm;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdmController extends Controller
{
    
    protected $model;
    public function __construct(Adm $adm)
    {
        $this -> model = $adm;
    }
    public function form(){
        $user = Auth::guard('adm')->user();
        return view('adm.form', compact('user'));
    } 

    public function login(Request $request){
        $credentials = [
            'emailAdm' => $request['emailAdm'],
            'password' => $request['password'],
            
        ];
        
        try{
        Auth::guard('adm')->attempt($credentials);
            $request->session()->regenerate();
            
            
            
            return redirect()->intended('/');
        }catch(Exception $e){
            dd($e->getMessage());
        }

    }

    public function logout(Request $request){
        Auth::guard('adm')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login.index');
    }
    public function index(Adm $adm,Request $request){

        $adms = $adm->all();
        $adms = $this->model
        ->getAdm(
         search: $request->search ?? ''
             );
        $user = Auth::guard('adm')->user();
        return view('adm.index', compact('adms', 'user'));
    }

    public function perfil(){
        $user = Auth::guard('adm')->user();
        return view('adm.perfil', compact('user'));
    }

    public function destroy($id){
        Adm::destroy($id);
        return redirect()->back();
    }

    public function update($id, Request $request){
        $adm = Adm::find($id);
        $data = $request->all();
        if($request->senhaAdm == ''){
            $data['password'] = bcrypt($adm->senhaAdm);
        }
        if($request->fotoAdm){
            
            $data['fotoAdm'] = $request->fotoAdm->store('adm');
         }
        $adm->update($data);
        return redirect()->back();
    }

    public function edit($id){
        $adm = Adm::find($id);
        $user = Auth::guard('adm')->user();
        return view('adm.edit', compact('adm', 'user'));
    }

    public function store(StoreUpdateAdmFormRequest $request){
        $data = $request->all();
        $data['password'] = bcrypt($data['senhaAdm']);
        
         if($request->fotoAdm){
            $data['fotoAdm'] = $request->fotoAdm->store('adm');
         }
         
         Adm::create($data);
         $user = Auth::guard('adm')->user();
         return view('adm.form', compact('user'));
    }
}
