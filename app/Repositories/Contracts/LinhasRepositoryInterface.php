<?php 


namespace App\Repositories\Contracts;

interface LinhasRepositoryInterface
{
    public function getLinhasWithCarrosAndConsumos($status, $search);
    public function findById($id);
    public function findWithCarros($id);
    public function update($id,$data);
    public function updateStatusLinhaCarroCatraca($id, $status);
    public function createWithCatracaCarro($data);
    public function allHome();
    public function search(String | null $search = null);
    
}