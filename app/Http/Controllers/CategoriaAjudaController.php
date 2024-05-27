<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriaAjuda;
class CategoriaAjudaController extends Controller
{
    protected $model = CategoriaAjuda::class;   
    public function __construct()
    {
        $this->model = app($this->model);
    }

    public function index(){
        return $this->model
        ->select('categoria_ajudas.id', 'categoria_ajudas.nomeCategoria')
        ->get();
    }
}
