<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investigator extends Model
{

    use HasFactory;
    protected $table = 'investigator';

    protected $fillable = ['name', 'contact', 'officer_id'];
}
