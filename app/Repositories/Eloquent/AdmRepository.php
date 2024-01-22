<?php

    namespace App\Repositories\Eloquent;

    use App\Models\Adm;
    use App\Repositories\Contracts\AdmRepositoryInterface;
use App\Repositories\Eloquent\AbstractRepository;

    class AdmRepository extends AbstractRepository implements AdmRepositoryInterface
    {
        protected $model = Adm::class;
        public function __construct(){
            $this->model = app($this->model);
        }
        public function all(String | null $search = null){
            
            return $this->model->where(function($query) use ($search){
                if($search)
                {
                $query->where('nomeAdm','LIKE',"%{$search}%");
                $query->orWhere('emailAdm','LIKE',"%{$search}%");
                }
            })->get();   
        }
    }