<?php

namespace App\Repositories\Eloquent;

use App\Models\Preco;
use App\Repositories\Contracts\PrecoRepositoryInterface;




class PrecoRepository extends AbstractRepository implements PrecoRepositoryInterface
{
    protected $model = Preco::class;
    public function __construct()
    {
        $this->model = app($this->model);
    }
    public function getLatestsReajustes()
    {
       $precos = $this ->model->orderBy('dataPreco', 'desc') ->get(); 
       return  $precos;
    }
    public function latest()
    {
        return $this->model->orderBy('dataPreco', 'desc')->first();
    }
    
}