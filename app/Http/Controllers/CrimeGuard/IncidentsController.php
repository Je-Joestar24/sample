<?php

namespace App\Http\Controllers\CrimeGuard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\Incidents;
use Illuminate\Http\Request;

class IncidentsController extends Controller
{
    /* for Pre defined methods from the repository */
    protected $Incidents;

    public function __construct(Incidents $IncidentsMethods)
    {
        $this->Incidents = $IncidentsMethods;
    }

    public function update()
    {
        return response()->redirectTo('/profile')
            ->with('message', 'Great, I get back with the information!');
    }

    public function getJsonData(Request $request)
    {
        /* $Incidents = $this->IncidentsMethods->search('name', 'Jerwin');
        $upUsr = $this->IncidentsMethods->find(16);
        if ($upUsr) {
            $this->IncidentsMethods->update($upUsr, ['name' => 'Anthony Capuyan']);
            
        } */
        //dd($request->all());
        $this->Incidents->create([
            'narrative_id' => 1,
            'status' => 'Pending', 
            'suspect_id' => 2,
            'victim_id' => 1,
            'reporting_person_id' => 1,
            'time_of_incident' => '12:30:00', 
            'date_of_incident' => '2023-05-01', 
            'time_reported' => '13:00:00', 
            'date_reported' => '2023-05-01', 
            'officer_id' =>1,
        ]);

        return response()->json($this->Incidents->get());
        //dd($request->all());
    }
}
