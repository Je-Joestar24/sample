<?php

namespace App\Http\Controllers\CrimeGuard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\AdministeringOfficer as AOs;
use Illuminate\Http\Request;

class AdministeringOfficerController extends Controller
{
    protected $AOC;

    public function __construct(AOs $AOs)
    {
        $this->AOC = $AOs;
    }
    //for fetching json testing
    public function getJsonData(){
        //$this->AOC->create(['street' => 'sangi', 'house_number' => 94029, 'village' => 'I don\'t know', 'barangay' => 'Ipil', 'city' => 'Ormoc City', 'province' => 'Leyte']);
        $aoc = $this->AOC->create(['officer_name'=>'Anthon Ni','signature'=>'kuriskuris.jpg', 'officer_id'=>1]);
        return response()->json($this->AOC->get());
    }
}
