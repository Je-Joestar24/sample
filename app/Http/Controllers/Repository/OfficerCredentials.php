<?php

namespace App\Http\Controllers\Repository;

use App\Http\Controllers\Controller;
use App\Models\OfficerCredential as OC;


/* OC = Officer Credentials */

class OfficerCredentials extends Controller
{
    public function find($id)
    {
        return OC::find($id);
    }

    public function get()
    {
        return OC::get();
    }

    public function create(array $data)
    {
        return OC::create($data);
    }

    public function update(OC $user, array $data)
    {
        $user->update($data);
        return $user;
    }

    /* to search a value from a specific column */
    public function search($key, $item)
    {
        return OC::where($key, 'like', "%$item%")->get();
    }
}
