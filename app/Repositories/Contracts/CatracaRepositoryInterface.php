<?php  

namespace App\Repositories\Contracts;

interface CatracaRepositoryInterface
{
    public function update($id, $data); 
    public function factory($linha, $qtd);
}