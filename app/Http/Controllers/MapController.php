<?php

namespace App\Http\Controllers;

use App\Models\Province;
use App\Models\Regency;

class MapController extends Controller
{
    public function index()
    {
        $regencies = Regency::select('id', 'name', 'latitude', 'longitude')
            ->get();

        return view('maps.index', compact('regencies'));
    }

    public function getProvinceData()
    {
        $provinces = Province::all();
        return response()->json($provinces);
    }

    public function getRegencyData()
    {
        $regencies = Regency::with('province')->get();
        return response()->json($regencies);
    }

    public function about()
    {
        return view('about');
    }
}
