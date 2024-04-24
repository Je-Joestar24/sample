<?php

namespace App\Http\Controllers\CrimeGuard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\PoliceStation as PS;
use Illuminate\Http\Request;

/* PS -> Police Station */
class PoliceStationController extends Controller
{
    protected $PS;

    public function __construct(PS $PS)
    {
        $this->PS = $PS;
    }

    //for fetching json testing
    public function getJsonData(){
        //$this->PS->create(['street' => 'sangi', 'house_number' => 94029, 'village' => 'I don\'t know', 'barangay' => 'Ipil', 'city' => 'OrmPS City', 'province' => 'Leyte']);
        $this->PS->create(['name'=>'PP1','telephone'=>'+590924', 'officer_id' => 1]);
        return response()->json($this->PS->get());
    }
}
