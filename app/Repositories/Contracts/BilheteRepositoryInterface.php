<?php 

namespace App\Repositories\Contracts;

interface BilheteRepositoryInterface
{
    public function removePassagens($qtd, $bilhete);
    public function findById($id);
    public function getPassagensAtivas($idPassageiro);
    public function adicionarPassagens($qtd, $bilhete);
    public function create($data);
    public function update($id, $data);
}