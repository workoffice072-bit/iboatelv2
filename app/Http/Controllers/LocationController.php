<?php

namespace App\Http\Controllers;

use Nnjeim\World\World;

class LocationController extends Controller
{
    public function getStates($countryId)
    {
        $states = World::states([
            'filters' => [
                'country_id' => $countryId
            ]
        ]);
        
        return response()->json($states->data);
    }
}