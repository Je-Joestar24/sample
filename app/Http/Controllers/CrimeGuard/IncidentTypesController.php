<?php

namespace App\Http\Controllers\CrimeGuard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\IncidentTypes;
use Illuminate\Http\Request;

class IncidentTypesController extends Controller
{
    protected $IncidentTypes;

    public function __construct(IncidentTypes $IC)
    {
        $this->IncidentTypes = $IC;
    }
    //for fetching json testing
    public function getJsonData(){
        $this->IncidentTypes->create(['incident_name' => 'Murder','category_id' => 1, 'sub_type_id' => 1, 'officer_id' => 1]);
        return response()->json($this->IncidentTypes->get());
    }
}
