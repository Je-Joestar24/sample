<?php

namespace App\Http\Controllers\testers;

use App\Http\Controllers\Controller;
use App\Models\Incidents;
use App\Models\incidentSuspects;
use App\Models\incidentVictims;
use App\Models\Suspects;
use Illuminate\Http\Request;

class joinTest extends Controller
{
    public function test()
    {

        $data = [];

        $incident = incidentSuspects::leftJoin('incidents', 'incident-suspects.incident', '=', 'incidents.id')
            ->leftJoin('suspects', 'incident-suspects.suspect', '=', 'suspects.id')
            ->leftJoin('incident-types', 'incidents.incident_type', "=", 'incident-types.id')
            ->leftJoin('incident-victims', 'incident-victims.incident', '=', 'incidents.id')
            ->leftJoin('victims', 'incident-victims.victim', '=', 'victims.id')
            ->select('incidents.id as incId','incident-types.incident_name', 'incidents.location', 'incidents.time_of_incident', 'incidents.status')
            ->distinct()
            ->get();

        foreach($incident as $value){
            $inc = $value;
            $inc['no_of_suspects'] = incidentSuspects::where('incident',$value['incId'])->count();
            $inc['no_of_victims'] = incidentVictims::where('incident', $value['incId'])->count();
            array_push($data, $inc);
        }

        return response()->json($data);
    }
}
