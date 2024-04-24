<?php

namespace App\Http\Controllers\Repository;

use App\Http\Controllers\Controller;
use App\Models\Incidents as Incident;

class Incidents extends Controller
{
    public function find($id)
    {
        return Incident::find($id);
    }

    public function get()
    {
        return Incident::get();
    }

    public function create(array $data)
    {
        return Incident::create($data);
    }

    public function update(Incident $Incidents, array $data)
    {
        $Incidents->update($data);
        return $Incidents;
    }

    /* to search a value from a specific column */
    public function search($key, $item)
    {
        return Incident::where($key, 'like', "%$item%")->get();
    }
}
