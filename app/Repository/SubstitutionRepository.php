<?php

namespace App\Repositories;

use App\Models\Substitution;

class SubstitutionRepository implements SubstitutionInterface
{
    protected $model;

    
    public function __construct(Substitution $substitution)
    {
        $this->model = $substitution;
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
        $substitution = $this->getById($id);
        $substitution->update($data);
        return $substitution;
    }

    public function delete($id)
    {
        $substitution = $this->getById($id);
        $substitution->delete();
    }

   
}
