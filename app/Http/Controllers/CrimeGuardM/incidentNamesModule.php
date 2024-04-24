<?php

namespace App\Http\Controllers\crimeguardm;

use App\Http\Controllers\Controller;
use App\Models\IncidentTypes;
use Illuminate\Http\Request;

class incidentNamesModule extends Controller
{
    //table display
    
    public function tableDisplay(Request $request){
        
        $data = [];

        try {
            /* Table headers */
            $data['table']['headers'] = [
                'id',
                'last name',
                'incident type',
                'incident sub types',
                'incident category',
            ];
            
            /* table data */
            $data['table']['data'] = IncidentTypes::
            leftJoin('incident-sub-types', 'incident-types.sub_type_id', '=', 'incident-sub-types.id')->
            leftJoin('incident-categories', 'incident-types.category_id', '=', 'incident-categories.id')->
            select([
                'incident-types.id',
                'incident-types.incident_name',
                'incident-sub-types.sub_type',
                'incident-categories.category_name'
            ])->get();
            $data['response'] = 'Success';
            
        } catch (\Exception $e) {
            $data['response'] = 'Error';
        }

        return response()->json($data);
    }
}
