<?php

namespace App\Http\Controllers\Repository;

use App\Http\Controllers\Controller;
use App\Models\incidentSuspects as IS;


/* IS = incident SUspects */

class incidentSuspects extends Controller
{

    public function find($id)
    {
        return IS::find($id);
    }

    public function get()
    {
        return IS::get();
    }

    public function create(array $data)
    {
        return IS::create($data);
    }

    public function update(IS $user, array $data)
    {
        $user->update($data);
        return $user;
    }

    /* to search a value from a specific column */
    public function search($key, $item)
    {
        return IS::where($key, 'like', "%$item%")->get();
    }

    public function with($param){
        return IS::with($param);
    }
}
