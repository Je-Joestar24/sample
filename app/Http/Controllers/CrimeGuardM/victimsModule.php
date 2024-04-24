<?php

namespace App\Http\Controllers\CrimeGuardM;

use App\Http\Controllers\Controller;
use App\Models\Victims;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class victimsModule extends Controller
{
    //table display

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
                'civil status',
            ];
            
            /* table data */
            $data['table']['data'] = Victims::leftJoin('addresses', 'victims.current_address_id', '=', 'addresses.id')->select([
                'victims.id',
                'victims.firstname',
                'victims.lastname',
                'victims.email',
                'victims.mobile_phone',
                DB::raw('CONCAT(addresses.street, ", ", addresses.barangay, ", ", addresses.city) AS cur_address'),
                'victims.age',
                'victims.gender',
                'victims.civil_status'
            ])->get();
            $data['response'] = 'Success';
            
        } catch (\Exception $e) {
            $data['response'] = 'Error';
        }

        return response()->json($data);
    }

}
