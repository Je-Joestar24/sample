<?php

namespace App\Http\Controllers\CrimeGuard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\ChiefOfOffice as CoO;
use Illuminate\Http\Request;

class ChiefOfOfficeController extends Controller
{
    protected $CoO;

    public function __construct(CoO $CoO)
    {
        $this->CoO = $CoO;
    }

    //for fetching json testing
    public function getJsonData(){
        //$this->CoO->create(['street' => 'sangi', 'house_number' => 94029, 'village' => 'I don\'t know', 'barangay' => 'Ipil', 'city' => 'Ormoc City', 'province' => 'Leyte']);
        $this->CoO->create(['name'=>'John David Ay','contact'=>'Contact me baby','email'=>'mamaMia@gmail.com', 'officer_id'=>1]);
        return response()->json($this->CoO->get());
    }
}
