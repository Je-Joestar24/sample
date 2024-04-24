<?php

namespace App\Http\Controllers\CrimeGuard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\AdministeringOfficer;
use App\Http\Controllers\Repository\ChiefOfOffice;
use App\Http\Controllers\Repository\CitizenCredentials;
use App\Http\Controllers\Repository\IncidentNarative;
use Illuminate\Http\Request;

class someController extends Controller
{

    protected $citizenCredentials;
    protected $administeringOfficer;
    protected $chiefOfOffice;
    protected $incidentNarative;

    public function __construct(CitizenCredentials $citizenCredentials, AdministeringOfficer $administeringOfficer, ChiefOfOffice $chiefOfOffice, IncidentNarative $incidentNarative)
    {
        $this->citizenCredentials = $citizenCredentials;
        $this->administeringOfficer = $administeringOfficer;
        $this->chiefOfOffice = $chiefOfOffice;
        $this->incidentNarative = $incidentNarative;
    }
    public function testing(){
        $data = [];
        $data['data'] = $this->incidentNarative->with('assistingOfficer')->with('administeringOfficer')->with('reportingPerson')->with('addresses')->with('incidentType')->get();
        return response()->json($data);
    }

    public function index()
    {

        $users =  $this->citizenCredentials->get();
        $allUsers = [];

        foreach ($users->toArray() as $us) {
            $user = $this->citizenCredentials->find($us['id'])->user;
            $credentials = $this->citizenCredentials->find($us['id']);

            $user = $user->toArray() + $credentials->toArray();

            /* Unseting all that are not useful */

            $unsetable = ['profile', 'user_level', 'middle_name', 'created_at', 'updated_at', 'current_address', 'other_address', 'user_id', 'date_request', 'accepted_date'];
            foreach ($unsetable as $unset) unset($user[$unset]);

            /* push the clean data */
            array_push($allUsers, $user);
        };


        return response()->json($allUsers);
    }

    public function index2()
    {
        $users = $this->citizenCredentials
            ->with('user')->whereHas('user', function ($query) {
                $query->where('email', 'like', '%jps%');
            })
            ->get();
        $allUser = [];
        /* This is where and what data are only need during this phase */
        $allowKs = ['id', 'email', 'profile', 'user_name', 'contact', 'first_name', 'last_name'];

        foreach ($users as $us) {
            $usr = [];

            foreach ($allowKs as $keys) {
                $usr[$keys] = $us['user'][$keys];
            }
            $usr['valid_id'] = $us['valid_id'];

            array_push($allUser, $usr);
        }
        return response()->json($allUser);
    }

    /* for table displays */
    public function display()
    {
        /* all the user data to be store */
        $allUser = [];

        /* Storage for headers and data */
        $data = [];

        /* This is where and what data are only need during this phase */
        $allowKs = ['id', 'last_name', 'first_name', 'user_name', 'email', 'contact'];
        $headers = ['id', 'last name', 'first name', 'username', 'email address', 'contact details'];
        
        $users = $this->citizenCredentials
            ->with('user')
            ->get();

        foreach ($users as $us) {
            $usr = [];
            foreach ($allowKs as $keys) {
                $usr[$keys] = $us['user'][$keys];
            }
            array_push($allUser, $usr);
        }
        $data['headers'] = $headers;
        $data['data'] = $allUser;
        return response()->json($data);
    }
}
