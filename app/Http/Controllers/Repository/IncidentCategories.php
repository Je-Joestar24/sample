<?php

namespace App\Http\Controllers\Repository;

use App\Http\Controllers\Controller;
use App\Models\IncidentCategories as IC;


/* IC = Incident Categories */

class IncidentCategories extends Controller
{
    public function find($id)
    {
        return IC::find($id);
    }

    public function get()
    {
        return IC::get();
    }

    public function create(array $data)
    {
        return IC::create($data);
    }

    public function update(IC $user, array $data)
    {
        $user->update($data);
        return $user;
    }

    /* to search a value from a specific column */
    public function search($key, $item)
    {
        return IC::where($key, 'like', "%$item%")->get();
    }
}
