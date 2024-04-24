<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class incidentVictims extends Model
{

    protected $table = 'incident-victims';
    protected $fillable = ['incident', 'victim'];
    use HasFactory;
}
