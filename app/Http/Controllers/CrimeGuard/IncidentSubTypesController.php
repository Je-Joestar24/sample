<?php

namespace App\Http\Controllers\CrimeGuard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\IncidentSubTypes;
use Illuminate\Http\Request;

class IncidentSubTypesController extends Controller
{
    protected $IncidentSubTypes;

    public function __construct(IncidentSubTypes $IC)
    {
        $this->IncidentSubTypes = $IC;
    }
    //for fetching json testing
    public function getJsonData(){
        $this->IncidentSubTypes->create(['sub_type' => 'Paracide', 'officer_id' => 1]);
        return response()->json($this->IncidentSubTypes->get());
    }
}
