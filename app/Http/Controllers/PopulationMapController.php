<?php

namespace App\Http\Controllers;

use App\Models\ThematicData;
use App\Models\Regency;
use Illuminate\Http\Request;

class PopulationMapController extends Controller
{
    public function index()
    {

        $regencies = Regency::with(['thematicData' => function ($query) {
            $query->select('regency_id', 'population');
        }])
            ->get()
            ->map(function ($regency) {
                return [
                    'id' => $regency->id,
                    'name' => $regency->name,
                    'thematic_data' => [
                        'value' => $regency->thematicData->first() ? $regency->thematicData->first()->population : 0
                    ]
                ];
            });

        $values = $regencies->pluck('thematic_data.value')->filter();
        $max = ceil($values->max());
        $min = floor($values->min());
        $range = $max - $min;
        $step = ceil($range / 5);

        $grades = [];
        for ($i = 1; $i <= 5; $i++) {
            $grades[] = $min + ($step * $i);
        }

        return view('maps.population', compact('regencies', 'grades'));
    }
}
