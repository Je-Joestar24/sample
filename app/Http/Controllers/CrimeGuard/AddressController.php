<?php

namespace App\Http\Controllers\CrimeGuard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\Addresses;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    protected $address;

    public function __construct(Addresses $AM)
    {
        $this->address = $AM;
    }
    //for fetching json testing
    public function getJsonData(){
        $this->address->create(['street' => 'sangi', 'house_number' => 94029, 'village' => 'I don\'t know', 'barangay' => 'Ipil', 'city' => 'Ormoc City', 'province' => 'Leyte']);
        return response()->json($this->address->get());
    }
}
