<?php

namespace App\Http\Controllers\Repository;

use App\Http\Controllers\Controller;
use App\Models\IncidentTypes as IT;


/* IT = Incident Types */

class IncidentTypes extends Controller
{
    public function find($id)
    {
        return IT::find($id);
    }

    public function get()
    {
        return IT::get();
    }

    public function create(array $data)
    {
        return IT::create($data);
    }

    public function update(IT $user, array $data)
    {
        $user->update($data);
        return $user;
    }

    /* to search a value from a specific column */
    public function search($key, $item)
    {
        return IT::where($key, 'like', "%$item%")->get();
    }
}
