<?php

namespace App\Http\Controllers\CrimeGuard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\Victims;
use Illuminate\Http\Request;

class VictimsController extends Controller
{
    /* for Pre defined methods from the repository */
    protected $Victims;

    public function __construct(Victims $VictimsMethods)
    {
        $this->Victims = $VictimsMethods;
    }

    public function update()
    {
        return response()->redirectTo('/profile')
            ->with('message', 'Great, I get back with the information!');
    }

    public function getJsonData(Request $request)
    {
        /* $Victims = $this->VictimsMethods->search('name', 'Jerwin');
        $upUsr = $this->VictimsMethods->find(16);
        if ($upUsr) {
            $this->VictimsMethods->update($upUsr, ['name' => 'Anthony Capuyan']);
            
        } */
        //dd($request->all());
        $this->Victims->create([
            'firstname' => 'John',
            'lastname' => 'Doe',
            'middlename' => 'A',
            'qualifier' => 'Jr',
            'nickname' => 'Johnny',
            'citizenship' => 'US',
            'gender' => 'Male',
            'civil_status' => 'Single',
            'birth_date' => '1990-01-01',
            'age' => 32,
            'place_of_birth' => 'Cityville',
            'home_phone' => '123-456-7890',
            'mobile_phone' => '987-654-3210',
            'current_address_id' => 1,
            'other_address_id' => 1,
            'highest_educ_attainment' => 'Bachelor\'s Degree',
            'occupation' => 'Software Developer',
            'id_card_presented' => '123456789',
            'email' => 'john.doe@example.com',
            'fb_account' => 'facebook.com/johndoe',
            'officer_id' => 1,
            // Add other columns as needed
        ]);

        return response()->json($this->Victims->get());
        //dd($request->all());
    }
}
