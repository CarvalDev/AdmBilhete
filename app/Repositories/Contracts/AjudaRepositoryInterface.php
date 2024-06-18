<?php

namespace App\Repositories\Contracts;

interface AjudaRepositoryInterface{
    public function allWithCategoria($status,);
    public function countVotosAjuda();
    public function create($data);
    public function update($id, $data);
    public function findById($id);
    public function destroy($id);

}