<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Victims extends Model
{
    use HasFactory;


    protected $fillable = [
        'firstname',
        'lastname',
        'middlename',
        'qualifier',
        'nickname',
        'citizenship',
        'gender',
        'civil_status',
        'birth_date',
        'age',
        'place_of_birth',
        'home_phone',
        'mobile_phone',
        'current_address_id',
        'other_address_id',
        'highest_educ_attainment',
        'occupation',
        'id_card_presented',
        'email',
        'fb_account',
        'edited_by', 
        'deleted', 
        'added_by', 
        'deleted_by'
    ];
}
