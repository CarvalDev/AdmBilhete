<?php  

namespace App\Repositories\Contracts;

interface ConsumoRepositoryInterface
{
    public function countConsumosByCars($idLinha);
    public function countConsumosByLinha($idLinha);
}