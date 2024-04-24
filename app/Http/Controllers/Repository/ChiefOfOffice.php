<?php

namespace App\Http\Controllers\Repository;

use App\Http\Controllers\Controller;
use App\Models\ChiefOfOffice as CoO;

class ChiefOfOffice extends Controller
{
    public function find($id)
    {
        return CoO::find($id);
    }

    public function get()
    {
        return CoO::get();
    }

    public function create(array $data)
    {
        return CoO::create($data);
    }

    public function update(CoO $user, array $data)
    {
        $user->update($data);
        return $user;
    }

    /* to search a value from a specific column */
    public function search($key, $item)
    {
        return CoO::where($key, 'like', "%$item%")->get();
    }
    
    public function with($param){
        return CoO::with($param);
    }
}
