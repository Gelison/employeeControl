<?php

namespace App\Repositories;

use App\Models\Doctype;

class DoctypeRepository implements DoctypeInterface
{
    protected $model;

    
    public function __construct(Doctype $doctype)
    {
        $this->model = $doctype;
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
        $doctype = $this->getById($id);
        $doctype->update($data);
        return $doctype;
    }

    public function delete($id)
    {
        $doctype = $this->getById($id);
        $doctype->delete();
    }

   
}
