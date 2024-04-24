<?php

namespace App\Http\Controllers\CrimeGuard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\Suspects;
use Illuminate\Http\Request;

class SuspectsController extends Controller
{
    /* for Pre defined methods from the repository */
    protected $Suspects;

    public function __construct(Suspects $SuspectsMethods)
    {
        $this->Suspects = $SuspectsMethods;
    }

    public function update()
    {
        return response()->redirectTo('/profile')
            ->with('message', 'Great, I get back with the information!');
    }

    public function getJsonData(Request $request)
    {
        /* $Suspects = $this->SuspectsMethods->search('name', 'Jerwin');
        $upUsr = $this->SuspectsMethods->find(16);
        if ($upUsr) {
            $this->SuspectsMethods->update($upUsr, ['name' => 'Anthony Capuyan']);
            
        } */
        //dd($request->all());
        $this->Suspects->create([
            'firstname' => 'John',
            'lastname' => 'Doe',
            'middlename' => 'A',
            'qualifier' => 'Sr',
            'nickname' => 'Johnny',
            'citizenship' => 'US',
            'gender' => 'Male',
            'civil_status' => 'Single',
            'birth_date' => '1990-01-01',
            'age' => 32,
            'place_of_birth' => 'City, Country',
            'home_phone' => '123-456-7890',
            'mobile_phone' => '987-654-3210',
            'current_address_id' => 1,
            'other_address_id' => 1,
            'highest_educ_attainment' => 'Bachelor\'s Degree',
            'occupation' => 'Engineer',
            'work_address_id' => 1,
            'relation_to_victim' => 'Friend',
            'fb_account' => 'john.doe',
            'email' => 'john.doe@example.com',
            'pnp_rank' => 'Sergeant',
            'unit_assignment' => 'Special Forces',
            'group_affiliation' => 'None',
            'has_previous_record' => true,
            'previous_records_details' => 'Arrested for speeding in 2015.',
            'status' => 'Active',
            'height' => 175,
            'weight' => 70,
            'built' => 'Athletic',
            'eyes_color' => 'Brown',
            'eyes_description' => 'Normal',
            'hair_color' => 'Black',
            'hair_description' => 'Short',
            'under_influence_of' => 'None',
            'officer_id' => 1,
            // Add other columns as needed
        ]);

        return response()->json($this->Suspects->get());
        //dd($request->all());
    }
}
