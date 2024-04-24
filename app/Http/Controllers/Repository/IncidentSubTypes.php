<?php

namespace App\Http\Controllers\Repository;

use App\Http\Controllers\Controller;
use App\Models\IncidentSubTypes as IST;


/* IST = Incident Sub Types */

class IncidentSubTypes extends Controller
{
    public function find($id)
    {
        return IST::find($id);
    }

    public function get()
    {
        return IST::get();
    }

    public function create(array $data)
    {
        return IST::create($data);
    }

    public function update(IST $user, array $data)
    {
        $user->update($data);
        return $user;
    }

    /* to search a value from a specific column */
    public function search($key, $item)
    {
        return IST::where($key, 'like', "%$item%")->get();
    }
}
