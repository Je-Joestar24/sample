<?php

namespace App\Http\Controllers\Repository;

use App\Http\Controllers\Controller;
use App\Models\Suspects as Sus;

class Suspects extends Controller
{
    public function find($id)
    {
        return Sus::find($id);
    }

    public function get()
    {
        return Sus::get();
    }

    public function create(array $data)
    {
        return Sus::create($data);
    }

    public function update(Sus $Suspects, array $data)
    {
        $Suspects->update($data);
        return $Suspects;
    }

    /* to search a value from a specific column */
    public function search($key, $item)
    {
        return Sus::where($key, 'like', "%$item%")->get();
    }

    public function select($items){
        return Sus::select($items)->get();
    }
}
