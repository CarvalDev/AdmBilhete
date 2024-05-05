<?php 

namespace App\Repositories\Contracts;

interface PassageiroRepositoryInterface
{
    public function search($search, $status);
    public function findWithAcoes($id);
    public function getSuporte($id);
    public function create($data);
    public function allHome();
    
    
}