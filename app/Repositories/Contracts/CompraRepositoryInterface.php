<?php

namespace App\Repositories\Contracts;

interface CompraRepositoryInterface
{
    public function getComprasStatistics($compra);
    
    public function sumHome();
}