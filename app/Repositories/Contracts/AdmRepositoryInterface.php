<?php

    namespace App\Repositories\Contracts;

    interface AdmRepositoryInterface
    {
        public function all(String | null $search = null);
        public function destroy($id);
        public function update($id, $data);
        public function findById($id);
        public function create($data);
    }