<?php

namespace App\Http\Controllers\testers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\incidentSuspects;
use DateTime;
//use Illuminate\Http\Request;

class tester extends Controller
{
    protected $test;

    public function __construct(incidentSuspects $incident)
    {
        $this->test = $incident;
    }
    public function testing()
    {

        date_default_timezone_set('Asia/Manila');

        $current_date_time = new DateTime();

        $data = [];
        
        /* 
        //to create an incident

        $this->test->create([
            'incident_type' => 1, 
            'time_of_incident' =>  $current_date_time->format('Y-m-d H:i:s'), 
            'date_of_incident' => '2023-01-01', 
            'incident_narrative' => 1, 
            'time_reported' => $current_date_time->format('Y-m-d H:i:s'),
            'date_reported' => '2023-01-02',
            'officer_id' => 1
        ]); 
        

        //to create a connection between tables

        $this->test->create(['incident'=>1, 'suspect' => 2]);
        $this->test->create(['incident'=>1, 'victim' => 1]);
        $this->test->create(['incident'=>1, 'user' => 1]);


        // to create or add address.

        $this->test->create(['street' => 'sangi', 'house_number' => 94029, 'village' => 'I don\'t know', 'barangay' => 'Ipil', 'city' => 'Ormoc City', 'province' => 'Leyte']);
        

        // to create a user

        $this->test->create([
            'email'=>'jpas@gmail.com', 
            'profile'=>'jejsomfar.jpg', 
            'password'=>'Jejomar09', 
            'user_name'=>'Jejofmarr4', 
            'gender'=>'Male', 
            'contact'=>'09098099', 
            'user_level'=>'1',
            'first_name'=>'Jejomar',  
            'last_name'=>'Parrilla', 
            'middle_name'=>'',
            'current_address'=>1, 
            'other_address'=>1
        ]);


        // For creating new user credentials

        $this->test->create([
            'user_id' => 2,
            'valid_id' => 'ABC123',
            'date_request' => now(),
            'accepted_date' => now(),
            'deleted_by' => 3,
            'archived_at' => null,
            'edited_by' => 3, 
            'rejected_by' => null, 
            'accepted_by' => 3,
        ]);
        

        // for creating officer credentials

        $this->test->create(['user_id'=> 3,'station'=>1, 'rank' => 'Turnaw na Chief']);


        // for creating chief of office

        $this->test->create(['name' => 'Borsalino Kizaru', 'contact' => '21313', 'email' => 'juanitodeputa@gmail.com', 'officer_id' => 3]);


        //for creating administering officer

        $this->test->create(['officer_name' => 'Black Jackal', 'signature' => 'flajflakl', 'officer_id' => 3]);
       

        // this is for update and create category

        $this->test->update($this->test->find(1), ['added_by' => 3]);
        $this->test->create([ 'category_name' => 'Index', 'edited_by' => 3, 'added_by' => 3]);


        // this is for creating sub_type

        $this->test->create(['sub_type' => 'killing spree', 'edited_by' => 3, 'added_by' => 3]);        


        // this is for creating incident type
        
        $this->test->create(['incident_name' => 'Murder', 'category_id' => 1, 'sub_type_id' => 1, 'edited_by' => 3, 'added_by' => 3]);
        

        // for creating a reporting person

        $this->test->create([
            'firstname' => 'John',
            'lastname' => 'Doe',
            'middlename' => 'M',
            'qualifier' => 'Mr.',
            'nickname' => 'Johnny',
            'citizenship' => 'US',
            'gender' => 'Mechanic',
            'civil_status' => 'Single',
            'birth_date' => '1990-01-15',
            'age' => 32,
            'place_of_birth' => 'New York',
            'home_phone' => '123-456-7890',
            'mobile_phone' => '987-654-3210',
            'current_address_id' => 1,
            'other_address_id' => 1,
            'highest_educ_attainment' => 'Bachelor\'s Degree',
            'occupation' => 'Software Engineer',
            'id_card_presented' => 'Driver\'s License',
            'email' => 'john.doe@example.com',
            'fb_account' => 'john.doe.fb',
            'signature' => 'base64_encoded_signature',
            'archived_at' => null,
            'edited_by' => 3,
            'deleted_by' => null,
            'added_by' => 3,
        ]);


        // for creating incident narrative

        $currentDateTime = date("Y-m-d H:i:s");

        $this->test->create([
            'incident_type_id' => 1,
            'addresses_id' => 1,
            'date_of_incident' => $currentDateTime,
            'details' => 'atay nag baktas tong bata gi panumbag naman gamit kamot.',
            'reporting_person_id' => 1,
            'administering_officer_id' => 1,
            'assisting_officer_id' => 3,
            'blotter_entry_nr' => 'Bofajl-rr4242',
        ]); 


        // incidents testing 

        $this->test->create([
            'incident_type' => 1, 
            'time_of_incident' => $current_date_time->format('Y-m-d H:i:s'),
            'date_of_incident' => $current_date_time->format('Y-m-d'),
            'status' => 'Pending',
            'incident_narrative' => 2,
            'time_reported' => $current_date_time->format('Y-m-d H:i:s'),
            'date_reported' => $current_date_time->format('Y-m-d'),
            'archived_at' => null,
            'edited_by' => 3,
            'deleted_by' => null,
            'added_by' => 3,
        ]);


        //Suspects testing

        $this->test->create([
            'firstname' => 'John',
            'lastname' => 'Doe',
            'middlename' => 'A',
            'qualifier' => 'Sr',
            'nickname' => 'JD',
            'citizenship' => 'US',
            'gender' => 'Male',
            'civil_status' => 'Single',
            'birth_date' => '1990-01-01',
            'age' => 32,
            'place_of_birth' => 'Ormoc City, Leyte, Philippines',
            'home_phone' => '123-456-7890',
            'mobile_phone' => '9876543210',
            'current_address_id' => 1, 
            'other_address_id' => 1, 
            'highest_educ_attainment' => 'BSCS',
            'occupation' => 'Software Developer',
            'work_address_id' => 1, 
            'relation_to_victim' => 'Friend',
            'fb_account' => 'john.doe',
            'email' => 'john.doe@example.com',
            'pnp_rank' => 'Officer',
            'unit_assignment' => 'Special Unit',
            'group_affiliation' => 'Tech Enthusiasts',
            'has_previous_record' => true,
            'previous_records_details' => 'None',
            'status' => 'Active',
            'height' => 180,
            'weight' => 70,
            'built' => 'Average',
            'eyes_color' => 'Brown',
            'eyes_description' => 'Normal',
            'hair_color' => 'Black',
            'hair_description' => 'Short',
            'under_influence_of' => 'None',
            'archived_at' => null,
            'edited_by' => 3,
            'deleted_by' => null,
            'added_by' => 3,
        ]);


        //Victims Testing

        $this->test->create([
            'firstname' => 'John',
            'lastname' => 'Doe',
            'middlename' => 'Middle',
            'qualifier' => 'Mr',
            'nickname' => 'JD',
            'citizenship' => 'US',
            'gender' => 'Male',
            'civil_status' => 'Single',
            'birth_date' => '1990-01-01',
            'age' => 32,
            'place_of_birth' => 'City',
            'home_phone' => '123456789',
            'mobile_phone' => '987654321',
            'current_address_id' => 1,
            'other_address_id' => 1,
            'highest_educ_attainment' => 'BSN',
            'occupation' => 'Care Taker',
            'id_card_presented' => 'ABC123',
            'email' => 'john.doe@example.com',
            'fb_account' => 'john.doe.fb',
            'archived_at' => null,
            'edited_by' => 3,
            'deleted_by' => null,
            'added_by' => 3,
        ]);


        //Investigator Testing

        $this->test->create([
            'name' => 'John Doe',
            'contact' => '123456789',
            'email' => 'john.doe@example.com',
            //'created_at' => now(),
            //'updated_at' => now(), 
            'officer_id' => 3,
        ]);

        //Police Station Testing
        $this->test->create([
            'name' => 'Jejomar',
            'telephone' => '4920492',
            'officer_id'=>3
        ]);


        //incident Reporting Person test

        $this->test->create([
            'incident' => 1,
            'user' => 2
        ]);


        //incident Victims test

        $this->test->create([
            'incident'=>1,
            'victim' => 1
        ]);

        //incident suspects test
        
        $this->test->create([
            'incident' => 1,
            'suspect' => 1
        ]);
        */


        $data['data'] = $this->test->get();
        return response()->json($data);
    }
}
