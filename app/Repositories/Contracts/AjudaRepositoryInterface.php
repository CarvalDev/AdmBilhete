<?php

namespace App\Repositories\Contracts;

interface AjudaRepositoryInterface{
    public function allWithCategoria();
    public function countVotosAjuda();
    public function create($data);
    public function update($id, $data);
    public function findById($id);
    public function destroy($id);
    public function getStatus($statusAjuda);

}