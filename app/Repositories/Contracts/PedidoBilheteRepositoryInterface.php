<?php  

namespace App\Repositories\Contracts;


interface PedidoBilheteRepositoryInterface
{
    public function search(String | null $search = null);
    public function get();
    public function getAllpedidos();
}