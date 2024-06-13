<?php

namespace App\Repositories\Eloquent;

use App\Models\Preco;
use App\Repositories\Contracts\PrecoRepositoryInterface;
use App\Repositories\Eloquent\AbstractRepository;



class PrecoRepository extends AbstractRepository implements PrecoRepositoryInterface
{
    protected $model = Preco::class;
    public function __construct()
    {
        $this->model = app($this->model);
    }
    public function getLatestsReajustes()
    {
       $precos = $this ->model->orderBy('dataPreco', 'desc') ->take(4)->get(); 
       return  $precos;
    }
    public function latest()
    {
        return $this->model->orderBy('dataPreco', 'desc')->first();
    }
    public function create($data){
        $this->model->create([
            'passagemPreco' => $data['passagemPreco'],
            'meiaPassagemPreco' => $data['passagemPreco']/2,
             'dataPreco' => date(now())
        ]);
    }
    

    
}