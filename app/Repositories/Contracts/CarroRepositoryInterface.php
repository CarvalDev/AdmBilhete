<?php 

namespace App\Repositories\Contracts;

interface CarroRepositoryInterface
{
     public function update($id, $data);
     public function findById($id);
}