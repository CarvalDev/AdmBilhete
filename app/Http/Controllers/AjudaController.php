<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\AdmRepositoryInterface;
use App\Services\AdmServices;
use Illuminate\Support\Facades\Auth;
class AjudaController extends Controller
{
    protected $model;
    protected $services;
    
    public function __construct(AdmRepositoryInterface $adm, AdmServices $services)
    {
        $this->model = $adm;
        $this->services = $services;
    }

    public function index(){
        $adms = $this->model->defaultAll();
        $user = Auth::guard('adm')->user();
        return view('ajuda.index', compact('user'));
    }

    public function show() {
        $user = Auth::guard('adm')->user();
        return view('ajuda.show', compact('user'));
    }
}
