<?php

namespace App\Http\Controllers\Repository;

use App\Http\Controllers\Controller;
use App\Models\ReportingPerson as ReportingPersons;

class ReportingPerson extends Controller
{
    public function find($id)
    {
        return ReportingPersons::find($id);
    }

    public function get()
    {
        return ReportingPersons::get();
    }

    public function create(array $data)
    {
        return ReportingPersons::create($data);
    }

    public function update(ReportingPersons $ReportingPerson, array $data)
    {
        $ReportingPerson->update($data);
        return $ReportingPerson;
    }

    /* to search a value from a specific column */
    public function search($key, $item)
    {
        return ReportingPersons::where($key, 'like', "%$item%")->get();
    }
}
