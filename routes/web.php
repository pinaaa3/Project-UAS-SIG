<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;
use App\Http\Controllers\PopulationMapController;
use App\Http\Controllers\PovertyMapController;
use App\Http\Controllers\UnemploymentMapController;
use App\Http\Controllers\ParksMapController;
use App\Http\Controllers\SchoolsMapController;
use App\Http\Controllers\SultengController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [MapController::class, 'index'])->name('maps.index');

// Population Routes
Route::get('/population', [PopulationMapController::class, 'index'])->name('maps.population');

// Poverty Routes
Route::get('/poverty', [PovertyMapController::class, 'index'])->name('maps.poverty');

// Unemployment Routes
Route::get('/unemployment', [UnemploymentMapController::class, 'index'])->name('maps.unemployment');

// Parks Routes
Route::get('/parks', [ParksMapController::class, 'index'])->name('maps.parks');

// Schools Routes
Route::get('/schools', [SchoolsMapController::class, 'index'])->name('maps.schools');

// Routes untuk Data Sulteng
Route::get('/sulteng/map', [SultengController::class, 'map'])->name('sulteng.map');
Route::get('/sulteng/regencies', [SultengController::class, 'regencies'])->name('sulteng.regencies');
Route::get('/sulteng/thematic', [SultengController::class, 'thematic'])->name('sulteng.thematic');

Route::get('/about', [MapController::class, 'about'])->name('about');
