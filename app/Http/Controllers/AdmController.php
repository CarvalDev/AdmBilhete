<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAdmFormRequest;
use App\Repositories\Contracts\AdmRepositoryInterface;
use App\Services\AdmServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdmController extends Controller
{
    
    protected $model;
    protected $services;
    
    public function __construct(AdmRepositoryInterface $adm, AdmServices $services)
    {
        $this->model = $adm;
        $this->services = $services;
    }

    public function form(){
        $user = Auth::guard('adm')->user();
        return view('adm.form', compact('user'));
    } 

    public function login(Request $request){
        $login = $this->services->login($request);
        if($login){
            return redirect()->intended('/');
        }else{
            return redirect()->back()->with('erro', 'Email ou senha incorretos!');
        }
    }

    public function logout(Request $request){
        $this->services->logout($request);
        return redirect()->route('login.index');
    }
    public function index(AdmRepositoryInterface $adm,Request $request){
        $adms = $this->model->all(search: $request->search ?? '');
        $user = Auth::guard('adm')->user();
        return view('adm.index', compact('adms', 'user'));
    }

    public function perfil(){
        $user = Auth::guard('adm')->user();
        return view('adm.perfil', compact('user'));
    }

    public function destroy($id){
        $this->model->destroy($id);
        return redirect()->back();
    }

    public function update($id, Request $request){
        $adm = $this->model->findById($id);
        $data = $this->services->dataQualityUpdate($request, $adm);
        $this->model->update($id, $data);
        return redirect()->back();
    }

    public function edit($id){
        $adm = $this->model->findById($id);
        $user = Auth::guard('adm')->user();
        return view('adm.edit', compact('adm', 'user'));
    }

    public function store(StoreUpdateAdmFormRequest $request){
        $data = $this->services->dataQualityStore($request);
        $this->model->create($data);
        $user = Auth::guard('adm')->user();
        return view('adm.form', compact('user'));
    }
}
