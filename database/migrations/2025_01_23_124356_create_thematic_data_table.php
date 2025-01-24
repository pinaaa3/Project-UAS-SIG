<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('thematic_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('regency_id')->constrained()->onDelete('cascade');
            $table->integer('population')->default(0);
            $table->integer('poverty_rate')->default(0);
            $table->integer('unemployment_rate')->default(0);
            $table->integer('parks')->default(0);
            $table->integer('schools')->default(0);
            $table->timestamps();
        });

        // Memanggil seeder setelah tabel dibuat
        $now = Carbon::now();
        DB::table('thematic_data')->insert([
            [
                'id' => 14,
                'regency_id' => 14,
                'population' => 69514,
                'poverty_rate' => 12,
                'unemployment_rate' => 2,
                'parks' => 13,
                'schools' => 154,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 15,
                'regency_id' => 15,
                'population' => 354402,
                'poverty_rate' => 7,
                'unemployment_rate' => 3,
                'parks' => 26,
                'schools' => 338,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 16,
                'regency_id' => 16,
                'population' => 113132,
                'poverty_rate' => 12,
                'unemployment_rate' => 3,
                'parks' => 9,
                'schools' => 146,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 17,
                'regency_id' => 17,
                'population' => 235567,
                'poverty_rate' => 14,
                'unemployment_rate' => 2,
                'parks' => 24,
                'schools' => 198,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 18,
                'regency_id' => 18,
                'population' => 293742,
                'poverty_rate' => 15,
                'unemployment_rate' => 3,
                'parks' => 17,
                'schools' => 333,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 19,
                'regency_id' => 19,
                'population' => 225875,
                'poverty_rate' => 12,
                'unemployment_rate' => 3,
                'parks' => 14,
                'schools' => 219,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 20,
                'regency_id' => 20,
                'population' => 149004,
                'poverty_rate' => 13,
                'unemployment_rate' => 3,
                'parks' => 11,
                'schools' => 156,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 21,
                'regency_id' => 21,
                'population' => 457707,
                'poverty_rate' => 14,
                'unemployment_rate' => 2,
                'parks' => 23,
                'schools' => 395,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 22,
                'regency_id' => 22,
                'population' => 149004,
                'poverty_rate' => 16,
                'unemployment_rate' => 2,
                'parks' => 13,
                'schools' => 182,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 23,
                'regency_id' => 23,
                'population' => 229474,
                'poverty_rate' => 12,
                'unemployment_rate' => 3,
                'parks' => 19,
                'schools' => 211,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 24,
                'regency_id' => 24,
                'population' => 11498,
                'poverty_rate' => 14,
                'unemployment_rate' => 4,
                'parks' => 8,
                'schools' => 79,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 25,
                'regency_id' => 25,
                'population' => 11767,
                'poverty_rate' => 12,
                'unemployment_rate' => 2,
                'parks' => 12,
                'schools' => 133,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 26,
                'regency_id' => 26,
                'population' => 368086,
                'poverty_rate' => 6,
                'unemployment_rate' => 6,
                'parks' => 13,
                'schools' => 131,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thematic_data');
    }
};