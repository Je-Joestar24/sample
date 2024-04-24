<?php

namespace App\Http\Controllers\Repository;

use App\Http\Controllers\Controller;
use App\Models\IncidentNarative as IN;


/* IN = Incident Types */

class IncidentNarative extends Controller
{
    public function find($id)
    {
        return IN::find($id);
    }

    public function get()
    {
        return IN::get();
    }

    public function create(array $data)
    {
        return IN::create($data);
    }

    public function update(IN $user, array $data)
    {
        $user->update($data);
        return $user;
    }

    /* with */

    public function with($param){
        return IN::with($param);
    }

    /* to search a value from a specific column */
    public function search($key, $item)
    {
        return IN::where($key, 'like', "%$item%")->get();
    }
}
