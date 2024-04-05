<?php

namespace App\Repositories\Contracts;

interface PrecoRepositoryInterface
{   
    public function findById($id);
    public function getLatestsReajustes();
    public function update($id,$data);
    public function latest();
    public function create($data);
    
}