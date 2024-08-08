<?php

namespace App\Repositories;

use App\Models\Division;

class DivisionRepository implements DivisionInterface
{
    protected $model;

    
    public function __construct(Division $division)
    {
        $this->model = $division;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $division = $this->getById($id);
        $division->update($data);
        return $division;
    }

    public function delete($id)
    {
        $division = $this->getById($id);
        $division->delete();
    }

   
}
