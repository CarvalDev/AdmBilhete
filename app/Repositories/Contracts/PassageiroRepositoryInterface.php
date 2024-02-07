<?php 

namespace App\Repositories\Contracts;

interface PassageiroRepositoryInterface
{
    public function all($search);
    public function findWithAcoes($id);
    public function create($data);
    public function allHome();
    
}