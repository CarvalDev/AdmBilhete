<?php

namespace App\Repositories\Contracts;

interface CompraRepositoryInterface
{
    public function getComprasStatistics($compra);
    
    public function sumHome();
    public function getEmissaoData();
    public function comprasByTipoBilhete();
    public function getFluxo($intervalo);
}