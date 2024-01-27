<?php

namespace App\Repositories\Eloquent;

use App\Models\Reajuste;
use App\Repositories\Contracts\ReajusteRepositoryInterface;
use App\Repositories\Eloquent\AbstractRepository;


class ReajusteRepository extends AbstractRepository implements ReajusteRepositoryInterface
{
    protected $model = Reajuste::class;
    public function __construct(){
        $this->model = app($this->model);
    }
    public function create($data){
        
        $this->model->create([
            'precoPassagemReajuste' => $data['data']['passagemPreco'],
            'precoMeiaPassagemReajuste' => $data['data']['passagemPreco']/2,
             'dataReajuste' => date(now())
        ]);
    }
   
}