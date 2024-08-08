<?php

namespace App\Repositories;

interface DivisionInterface
{
    public function getAll();

    public function getById($id);

    public function create(array $data);

    public function update($id, array $data);

    public function delete($id);
}