<?php

namespace App\Repositories\Contracts;

interface SuporteRepositoryInterface
{
    public function all($status, $search);
    public function findWithPassageiro($id);
    public function updateStatus($id, $status);
    public function findById($id);
    public function allHome();
}