<?php

namespace App\Http\Controllers\crimeguardm;

use App\Http\Controllers\Controller;
use App\Models\ReportingPerson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class witnessModule extends Controller
{
    //Table displays

    
    public function tableDisplay(Request $request){
        
        $data = [];

        try {
            /* Table headers */
            $data['table']['headers'] = [
                'id',
                'last name',
                'firstname',
                'email address',
                'phone no.',
                'current address',
                'age',
                'gender',
            ];
            
            /* table data */
            $data['table']['data'] = ReportingPerson::leftJoin('addresses', 'reporting-persons.current_address_id', '=', 'addresses.id')->select([
                'reporting-persons.id',
                'reporting-persons.firstname',
                'reporting-persons.lastname',
                'reporting-persons.email',
                'reporting-persons.mobile_phone',
                DB::raw('CONCAT(addresses.street, ", ", addresses.barangay, ", ", addresses.city) AS cur_address'),
                'reporting-persons.age',
                'reporting-persons.gender',
            ])->get();
            
            $data['response'] = 'Success';
        } catch (\Exception $e) {
            $data['response'] = 'Error';
        }

        return response()->json($data);
    }

}
