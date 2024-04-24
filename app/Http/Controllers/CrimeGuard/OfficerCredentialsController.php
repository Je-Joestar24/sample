<?php

namespace App\Http\Controllers\CrimeGuard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\OfficerCredentials as OC;
use Illuminate\Http\Request;

/* OC -> citizen Credentials */
class OfficerCredentialsController extends Controller
{
    protected $OC;

    public function __construct(OC $OC)
    {
        $this->OC = $OC;
    }

    //for fetching json testing
    public function getJsonData(){
        //$this->OC->create(['street' => 'sangi', 'house_number' => 94029, 'village' => 'I don\'t know', 'barangay' => 'Ipil', 'city' => 'Ormoc City', 'province' => 'Leyte']);
        $this->OC->create(['user_id'=>1,'station'=>1, 'rank' => 'Karagador']);
        return response()->json($this->OC->get());
    }
}
