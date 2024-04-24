<?php

namespace App\Http\Controllers\Repository;

use App\Http\Controllers\Controller;
use App\Models\CitizenCredentials as CC;


/* CC = Citizen Credentials */

class CitizenCredentials extends Controller
{   
    public function find($id)
    {
        return CC::find($id);
    }

    public function get()
    {
        return CC::get();
    }

    public function create(array $data)
    {
        return CC::create($data);
    }

    public function update(CC $user, array $data)
    {
        $user->update($data);
        return $user;
    }

    /* to search a value from a specific column */
    public function search($key, $item)
    {
        return CC::where($key, 'like', "%$item%")->get();
    }

    public function with($param){
        return CC::with($param);
    }
}
