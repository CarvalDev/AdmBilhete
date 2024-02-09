<?php

    namespace App\Repositories\Contracts;

    interface AdmRepositoryInterface
    {
        public function search(String | null $search = null);
        public function all();
        public function destroy($id);
        public function update($id, $data);
        public function findById($id);
        public function create($data);
    }