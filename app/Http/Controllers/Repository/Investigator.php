<?php

namespace App\Http\Controllers\Repository;

use App\Http\Controllers\Controller;
use App\Models\Investigator as Inv;


/* Inv = Investigator */

class Investigator extends Controller
{
    public function find($id)
    {
        return Inv::find($id);
    }

    public function get()
    {
        return Inv::get();
    }

    public function create(array $data)
    {
        return Inv::create($data);
    }

    public function update(Inv $user, array $data)
    {
        $user->update($data);
        return $user;
    }

    /* to search a value from a specific column */
    public function search($key, $item)
    {
        return Inv::where($key, 'like', "%$item%")->get();
    }
}
