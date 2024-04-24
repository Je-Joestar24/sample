<?php

namespace App\Http\Controllers\Repository;

use App\Http\Controllers\Controller;
use App\Models\incidentReportingPerson as IV;


/* IV = incident Victims */

class incidentReportingPerson extends Controller
{

    public function find($id)
    {
        return IV::find($id);
    }

    public function get()
    {
        return IV::get();
    }

    public function create(array $data)
    {
        return IV::create($data);
    }

    public function update(IV $user, array $data)
    {
        $user->update($data);
        return $user;
    }

    /* to search a value from a specific column */
    public function search($key, $item)
    {
        return IV::where($key, 'like', "%$item%")->get();
    }

    public function with($param){
        return IV::with($param);
    }
}
