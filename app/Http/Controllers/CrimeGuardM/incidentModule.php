<?php

namespace App\Http\Controllers\CrimeGuardM;

use App\Http\Controllers\Controller;
use App\Models\incidentSuspects;
use App\Models\incidentVictims;
use Illuminate\Http\Request;

class incidentModule extends Controller
{
    //displaying data to the table
    public function displayIncidents(Request $request)
    {
        try {
            $data = [];
            $data['table'] = [];
            $data['table']['headers'] = ['id', 'incident name', 'location', 'date', 'time', 'status', '# of suspects', '# of victims'];
            $data['table']['data'] = [];

            $incident = incidentSuspects::leftJoin('incidents', 'incident-suspects.incident', '=', 'incidents.id')
                ->leftJoin('suspects', 'incident-suspects.suspect', '=', 'suspects.id')
                ->leftJoin('incident-types', 'incidents.incident_type', "=", 'incident-types.id')
                ->leftJoin('incident-victims', 'incident-victims.incident', '=', 'incidents.id')
                ->leftJoin('victims', 'incident-victims.victim', '=', 'victims.id')
                ->select('incidents.id', 'incident-types.incident_name', 'incidents.location', 'incidents.time_of_incident', 'incidents.status')
                ->distinct()
                ->get();


            foreach ($incident as $value) {

                $value['no_of_suspects'] = incidentSuspects::where('incident', $value['id'])->count();
                $value['no_of_victims'] = incidentVictims::where('incident', $value['id'])->count();
                $value['date'] = explode(' ', $value['time_of_incident'])[0];
                $value['time'] = explode(' ',  $value['time_of_incident'])[1];

                $inc =
                    [
                        'id' => $value['id'],
                        'incident_name' => $value['incident_name'],
                        'location' => $value['location'],
                        'date' => $value['date'],
                        'time' => $value[''],
                        'status' => $value['status'],
                        'no_of_victims' => $value['no_of_victims'],
                        'no_of_suspects' => $value['no_of_suspects']
                    ];

                array_push($data['data'], $inc);
            }
            $data['response'] = 'success';
        } catch (\Exception $e) {
            $data['response'] = 'error';
        }
        return response()->json($data);
    }
    
}
