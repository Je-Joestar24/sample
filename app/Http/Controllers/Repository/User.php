<?php

namespace App\Http\Controllers\Repository;

use App\Http\Controllers\Controller;
use App\Models\User as Users;

class User extends Controller
{
    public function getUser()
    {
        return Users::join('addresses as current', 'users.current_address', '=', 'current.id')
        ->join('addresses as other', 'users.other_address', '=', 'other.id')
        ->where('users.user_level', '=', 3)
        ->select(
            'users.id',
            'users.email',
            'users.profile',
            'users.user_name',
            'users.gender',
            'users.contact',
            'users.user_level',
            'users.first_name',
            'users.last_name',
            'users.middle_name',
            'current.street as current_street',
            'current.house_number as current_house_number',
            'current.village as current_village',
            'current.barangay as current_barangay',
            'current.city as current_city',
            'current.province as current_province',
            'other.street as other_street',
            'other.house_number as other_house_number',
            'other.village as other_village',
            'other.barangay as other_barangay',
            'other.city as other_city',
            'other.province as other_province'
        )
        ->get();
    }
    
    public function find($id)
    {
        return Users::find($id);
    }

    public function get()
    {
        return Users::get();
    }

    public function create(array $data)
    {
        return Users::create($data);
    }

    public function update(Users $user, array $data)
    {
        $user->update($data);
        return $user;
    }

    /* to search a value from a specific column */
    public function search($key, $item)
    {
        return Users::where($key, 'like', "%$item%")->get();
    }
}
