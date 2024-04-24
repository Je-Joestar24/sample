<?php

namespace App\Http\Controllers\Repository;

use App\Http\Controllers\Controller;
use App\Models\Victims as Vic;

class Victims extends Controller
{
    public function find($id)
    {
        return Vic::find($id);
    }

    public function get()
    {
        return Vic::get();
    }

    public function create(array $data)
    {
        return Vic::create($data);
    }

    public function update(Vic $Victims, array $data)
    {
        $Victims->update($data);
        return $Victims;
    }

    /* to search a value from a specific column */
    public function search($key, $item)
    {
        return Vic::where($key, 'like', "%$item%")->get();
    }
}
