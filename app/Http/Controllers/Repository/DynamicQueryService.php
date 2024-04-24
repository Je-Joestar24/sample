<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Builder;

class DynamicQueryService
{
    protected $model;

    public function __construct(Builder $model)
    {
        $this->model = $model;
    }

    public function filterByName($name)
    {
        $this->model->where('name', $name);
        return $this;
    }

    public function filterByRole($role)
    {
        $this->model->where('role', $role);
        return $this;
    }

    public function orderBy($column, $direction = 'asc')
    {
        $this->model->orderBy($column, $direction);
        return $this;
    }

    public function getResults()
    {
        return $this->model->get();
    }
}
