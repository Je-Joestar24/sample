<?php

namespace App\Http\Controllers\Repository;

use App\Http\Controllers\Controller;
use App\Models\AdministeringOfficer as AOs;

class AdministeringOfficer extends Controller
{
    public function find($id)
    {
        return AOs::find($id);
    }

    public function get()
    {
        return AOs::get();
    }

    public function create(array $data)
    {
        return AOs::create($data);
    }

    public function update(AOs $AOs, array $data)
    {
        $AOs->update($data);
        return $AOs;
    }

    /* to search a value from a specific column */
    public function search($key, $item)
    {
        return AOs::where($key, 'like', "%$item%")->get();
    }

    
    public function with($param){
        return AOs::with($param);
    }
}
