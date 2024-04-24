<?php

namespace App\Http\Controllers\Repository;

use App\Http\Controllers\Controller;
use App\Models\PoliceStation as PS;


/* PS = Police Staion */

class PoliceStation  extends Controller
{
    public function find($id)
    {
        return PS::find($id);
    }

    public function get()
    {
        return PS::get();
    }

    public function create(array $data)
    {
        return PS::create($data);
    }

    public function update(PS $user, array $data)
    {
        $user->update($data);
        return $user;
    }

    /* to search a value from a specific column */
    public function search($key, $item)
    {
        return PS::where($key, 'like', "%$item%")->get();
    }
}
