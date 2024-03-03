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
        public function search(String | null $search = null){
            
            return $this->model->
                
                where('nomeAdm','LIKE',"%{$search}%")
                ->orWhere('emailAdm','LIKE',"%{$search}%")
                
            ->paginate(10);   
        }
    }