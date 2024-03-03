<?php 

namespace App\Repositories\Contracts;

interface PassageiroRepositoryInterface
{
    public function search(String | null $search = null);
    public function findWithAcoes($id);
    public function getSuporte($id);
    public function create($data);
    public function allHome();
    
    
}