<?php

namespace App\Repositories\Contracts;

interface PrecoRepositoryInterface
{   
    public function findById($id);
    public function getTheLastReajustes($reajuste);
    public function update($id,$data);
    
}