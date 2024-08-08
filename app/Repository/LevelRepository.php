<?php

namespace App\Repositories;

use App\Models\Level;

class LevelRepository implements LevelInterface
{
    protected $model;

    
    public function __construct(Level $level)
    {
        $this->model = $level;
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
        $level = $this->getById($id);
        $level->update($data);
        return $level;
    }

    public function delete($id)
    {
        $level = $this->getById($id);
        $level->delete();
    }

   
}
