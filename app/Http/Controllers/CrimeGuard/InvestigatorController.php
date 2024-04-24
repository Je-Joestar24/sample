<?php

namespace App\Http\Controllers\CrimeGuard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\Investigator;
use Illuminate\Http\Request;

class InvestigatorController extends Controller
{
    protected $Investigator;

    public function __construct(Investigator $IC)
    {
        $this->Investigator = $IC;
    }
    //for fetching json testing
    public function getJsonData(){
        $this->Investigator->create([
            'name' => 'Don Pablo Chupapi',
        'contact' => '+93029302',
         'email' => 'donpablochupapi@gmail.com',
          'officer_id' => 1]);
        return response()->json($this->Investigator->get());
    }
}
