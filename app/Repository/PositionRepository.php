<?php

namespace App\Repositories;

use App\Models\Position;

class PositionRepository implements PositionInterface
{
    protected $model;

    
    public function __construct(Position $position)
    {
        $this->model = $position;
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
        $position = $this->getById($id);
        $position->update($data);
        return $position;
    }

    public function delete($id)
    {
        $position = $this->getById($id);
        $position->delete();
    }

   
}
