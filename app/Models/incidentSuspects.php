<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class incidentSuspects extends Model
{
    protected $table = 'incident-suspects';
    protected $fillable = ['incident', 'suspect'];
    use HasFactory;

    public function suspect():BelongsTo
    {
        return $this->belongsTo(Suspects::class, 'suspect');
    }

    public function incident():BelongsTo
    {
        return $this->belongsTo(Incidents::class, 'id');
    }
}


