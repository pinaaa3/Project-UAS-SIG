<?php

namespace App\Http\Controllers;

use App\Models\ThematicData;
use App\Models\Regency;
use Illuminate\Http\Request;

class ParksMapController extends Controller
{
    public function index()
    {
        $regencies = Regency::with(['thematicData' => function ($query) {
            $query->select('regency_id', 'parks');
        }])
            ->get()
            ->map(function ($regency) {
                return [
                    'id' => $regency->id,
                    'name' => $regency->name,
                    'thematic_data' => [
                        'value' => $regency->thematicData->first() ? $regency->thematicData->first()->parks : 0
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

        return view('maps.parks', compact('regencies', 'grades'));
    }

    public function getData()
    {
        $data = ThematicData::with('regency.province')
            ->select('regency_id', 'parks')
            ->get();
        return response()->json($data);
    }
}
