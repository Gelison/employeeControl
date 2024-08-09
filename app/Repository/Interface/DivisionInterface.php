<?php

namespace App\Repositories;

interface ReadableDivisionInterface
{
    /**
     * Получить все подразделения.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAll();

    /**
     * Получить подразделение по его ID.
     *
     * @param int $id
     * @return \App\Models\Division|null
     */
    public function getById(int $id);
}

interface WritableDivisionInterface
{
    /**
     * Создать новое подразделение.
     *
     * @param array $data
     * @return \App\Models\Division
     */
    public function create(array $data);

    /**
     * Обновить подразделение по его ID.
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update(int $id, array $data);

    /**
     * Удалить подразделение по его ID.
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id);
}
