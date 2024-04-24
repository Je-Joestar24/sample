<?php

namespace App\Http\Controllers\CrimeGuardM;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\Suspects;
use App\Models\Suspects as ModelsSuspects;
use Illuminate\Http\Request;

class suspectsManipulation extends Controller
{


    protected $Suspect;

    public function __construct(Suspects $suspects)
    {
        $this->Suspect = $suspects;
    }

    /* Displayed data on the table */
    public function tableDisplay()
    {
        $data = [];

        try {
            $data['table']['headers'] = [
                'id',
                'last name',
                'firstname',
                'email address',
                'phone no.',
                'age',
                'gender',
                'civil status',
                'current address'
            ];
            
            $data['table']['data'] = $this->Suspect->select([
                'id',
                'firstname',
                'lastname',
                'email',
                'mobile_phone',
                'age',
                'gender',
                'civil_status',
                'current_address_id'
            ]);
            $data['response'] = 'Success';
        } catch (\Exception $e) {
            $data['response'] = 'Error';
        }

        return response()->json($data);
    }

    public function viewSuspect(Request $request)
    {
        $data = [];
        $suspected = ModelsSuspects::select([
            'firstname',
            'lastname',
            'nickname',
            'citizenship',
            'gender',
            'civil_status',
            'birth_date',
            'age',
            'place_of_birth',
            'home_phone',
        ]);

        try {
            $data['data'] = $suspected->find(1);
            $data['response'] = 'Success';
        } catch (\Exception $e) {
            $data['response'] = 'Error';
        }

        return response()->json($data);
    }
}
