<?php

namespace App\Http\Controllers\CrimeGuard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\IncidentNarative;
use Illuminate\Http\Request;

class IncidentNarativeController extends Controller
{
    protected $IncidentNarative;

    public function __construct(IncidentNarative $incidentNarative)
    {
        $this->IncidentNarative = $incidentNarative;
    }
    //for fetching json testing
    public function getJsonData(){

        $this->IncidentNarative->create([
            'incident_type_id'=>1,
            'addresses_id' => 1,
            'details' => 'Atay kaayo ang animal ging sagpa naman noon kug bunot, sa may ribs.',
            'administering_officer_id' => 1,
            'assisting_officer_id' => 1,
            'blotter_entry_nr'=>'BIR-00'
        ]);

        return response()->json($this->IncidentNarative->get());
    }
}
