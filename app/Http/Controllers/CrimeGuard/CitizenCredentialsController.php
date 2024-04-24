<?php

namespace App\Http\Controllers\CrimeGuard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\CitizenCredentials as CC;
use App\Http\Controllers\Repository\User;
use Illuminate\Http\Request;

/* CC -> citizen Credentials */
class CitizenCredentialsController extends Controller
{
    protected $CC;
    protected $user;

    public function __construct(CC $CC, User $user)
    {
        $this->CC = $CC;
        $this->user = $user;
    }

    //for fetching json testing
    public function getJsonData(){
        //$this->CC->create(['street' => 'sangi', 'house_number' => 94029, 'village' => 'I don\'t know', 'barangay' => 'Ipil', 'city' => 'Ormoc City', 'province' => 'Leyte']);
        //$this->CC->create(['user_id'=>1,'valid_id'=>'house.png']);
        $userData = $this->user->getUser();
        $userCr = $this->CC->getUsers($userData);

        return response()->json($userCr);
    }
}