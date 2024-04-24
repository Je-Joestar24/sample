<?php

namespace App\Http\Controllers\Repository;

use App\Http\Controllers\Controller;
use App\Models\addresses as addrss;

class Addresses extends Controller
{
    public function find($id)
    {
        return addrss::find($id);
    }

    public function get()
    {
        return addrss::get();
    }

    public function create(array $data)
    {
        return addrss::create($data);
    }

    public function update(addrss $user, array $data)
    {
        $user->update($data);
        return $user;
    }

    /* to search a value from a specific column */
    public function search($key, $item)
    {
        return addrss::where($key, 'like', "%$item%")->get();
    }
}
