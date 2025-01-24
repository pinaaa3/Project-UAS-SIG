<?php

namespace App\Http\Controllers;

use App\Models\Regency;
use App\Models\ThematicData;

class SultengController extends Controller
{
    public function map()
    {
        $regencies = Regency::with(['thematicData' => function ($query) {
            $query->select('regency_id', 'population', 'poverty_rate', 'unemployment_rate', 'parks', 'schools');
        }])
            ->select('id', 'name', 'latitude', 'longitude')
            ->get()
            ->map(function ($regency) {
                return [
                    'id' => $regency->id,
                    'name' => $regency->name,
                    'latitude' => $regency->latitude,
                    'longitude' => $regency->longitude,
                    'thematic_data' => [
                        'population' => $regency->thematicData->first()->population ?? 0,
                        'poverty_rate' => $regency->thematicData->first()->poverty_rate ?? 0,
                        'unemployment_rate' => $regency->thematicData->first()->unemployment_rate ?? 0,
                        'parks' => $regency->thematicData->first()->parks ?? 0,
                        'schools' => $regency->thematicData->first()->schools ?? 0
                    ]
                ];
            });


        return view('sulteng.map', compact('regencies'));
    }

    public function regencies()
    {
        $regencies = Regency::with(['thematicData' => function ($query) {
            $query->select('regency_id', 'population', 'poverty_rate', 'unemployment_rate', 'parks', 'schools');
        }])
            ->select('id', 'name', 'latitude', 'longitude')
            ->get();



        return view('sulteng.regencies', compact('regencies'));
    }

    public function thematic()
    {
        $thematicData = ThematicData::with(['regency' => function ($query) {
            $query->select('id', 'name');
        }])
            ->select('regency_id', 'population', 'poverty_rate', 'unemployment_rate', 'parks', 'schools')
            ->get();



        return view('sulteng.thematic', compact('thematicData'));
    }
}
