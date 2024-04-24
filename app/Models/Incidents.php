<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Incidents extends Model
{
    use HasFactory;

    protected $fillable = [
        'incident_type',
        'status',
        'time_of_incident',
        'date_of_incident',
        'incident_narrative',
        'time_reported',
        'date_reported', 
        'edited_by', 
        'deleted', 
        'added_by', 
        'deleted_by'
    ];

    /* Belongs to */

    public function incidentNarative(): BelongsTo
    {
        return $this->belongsTo(IncidentNarative::class, 'narrative_id');
    }

    public function incidentType():BelongsTo
    {
        return $this->belongsTo(IncidentTypes::class,'incident_type');
    }
}
