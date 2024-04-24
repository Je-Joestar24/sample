<?php

namespace App\Http\Controllers\CrimeGuard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\ReportingPerson;
use Illuminate\Http\Request;

class ReportingPersonController extends Controller
{
    /* for Pre defined methods from the repository */
    protected $ReportingPerson;

    public function __construct(ReportingPerson $ReportingPersonMethods)
    {
        $this->ReportingPerson = $ReportingPersonMethods;
    }

    public function update()
    {
        return response()->redirectTo('/profile')
            ->with('message', 'Great, I get back with the information!');
    }

    public function getJsonData(Request $request)
    {
        /* $ReportingPerson = $this->ReportingPersonMethods->search('name', 'Jerwin');
        $upUsr = $this->ReportingPersonMethods->find(16);
        if ($upUsr) {
            $this->ReportingPersonMethods->update($upUsr, ['name' => 'Anthony Capuyan']);
            
        } */
        //dd($request->all());
        $this->ReportingPerson->create([
            'firstname' => 'John',
            'lastname' => 'Doe',
            'middlename' => 'A',
            'qualifier' => 'Jr.',
            'nickname' => 'Johnny',
            'citizenship' => 'American',
            'gender' => 'Male',
            'civil_status' => 'Single',
            'birth_date' => '1990-01-15',
            'age' => 32,
            'place_of_birth' => 'Cityville, USA',
            'home_phone' => '123-456-7890',
            'mobile_phone' => '987-654-3210',
            'current_address_id' => 1, 
            'other_address_id' => 1,   
            'highest_educ_attainment' => 'Bachelor\'s Degree',
            'occupation' => 'Software Developer',
            'id_card_presented' => 'Driver\'s License',
            'email' => 'john.doe@example.com',
            'fb_account' => 'facebook.com/johndoe',
            'signature' => 'base64_encoded_image_data',
            'officer_id' => 1,
        ]);

        return response()->json($this->ReportingPerson->get());
        //dd($request->all());
    }
}
