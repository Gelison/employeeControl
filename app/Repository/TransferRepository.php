<?php

namespace App\Repositories;

use App\Models\Transfer;

class TransferRepository implements TransferInterface
{
    protected $model;

    
    public function __construct(Transfer $transfer)
    {
        $this->model = $transfer;
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
        $transfer = $this->getById($id);
        $transfer->update($data);
        return $transfer;
    }

    public function delete($id)
    {
        $transfer = $this->getById($id);
        $transfer->delete();
    }

   
}
