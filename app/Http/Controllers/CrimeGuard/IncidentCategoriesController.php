<?php

namespace App\Http\Controllers\CrimeGuard;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Repository\IncidentCategories;
use Illuminate\Http\Request;

class IncidentCategoriesController extends Controller
{
    protected $incidentCategories;

    public function __construct(IncidentCategories $IC)
    {
        $this->incidentCategories = $IC;
    }
    //for fetching json testing
    public function getJsonData(){
        $this->incidentCategories->create(['category_name' => 'Index', 'officer_id' => 1]);
        return response()->json($this->incidentCategories->get());
    }
}
