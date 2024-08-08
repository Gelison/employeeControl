<?php

namespace App\Repositories;

use App\Models\Certification;

class CertificationRepository implements CertificationInterface
{
    protected $model;

    public function __construct(Certification $certification)
    {
        $this->model = $certification;
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
        $certification = $this->getById($id);
        $certification->update($data);
        return $certification;
    }

    public function delete($id)
    {
        $certification = $this->getById($id);
        $certification->delete();
    }

    
}