<?php

namespace App\Repositories;

use App\Models\Education;

class EducationRepository implements EducationInterface
{
    protected $model;

    
    public function __construct(Education $education)
    {
        $this->model = $education;
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
        $education = $this->getById($id);
        $education->update($data);
        return $education;
    }

    public function delete($id)
    {
        $education = $this->getById($id);
        $education->delete();
    }

   
}
