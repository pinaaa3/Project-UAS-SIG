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
        Schema::create('regencies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('province_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('alt_name')->default('');
            $table->double('latitude')->default(0);
            $table->double('longitude')->default(0);
            $table->timestamps();
        });

        // Memanggil seeder setelah tabel dibuat
        $now = Carbon::now();
        DB::table('regencies')->insert([
            [
                'id' => 14,
                'province_id' => 1,
                'name' => 'KABUPATEN BANGGAI KEPULAUAN',
                'alt_name' => 'KABUPATEN BANGGAI KEPULAUAN',
                'latitude' => -1.6424,
                'longitude' => 123.54881,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 15,
                'province_id' => 1,
                'name' => 'KABUPATEN BANGGAI',
                'alt_name' => 'KABUPATEN BANGGAI',
                'latitude' => -1.2835,
                'longitude' => 122.8892,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 16,
                'province_id' => 1,
                'name' => 'KABUPATEN MOROWALI',
                'alt_name' => 'KABUPATEN MOROWALI',
                'latitude' => -1.89342,
                'longitude' => 121.25473,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 17,
                'province_id' => 1,
                'name' => 'KABUPATEN POSO',
                'alt_name' => 'KABUPATEN POSO',
                'latitude' => -1.65,
                'longitude' => 120.5,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 18,
                'province_id' => 1,
                'name' => 'KABUPATEN DONGGALA',
                'alt_name' => 'KABUPATEN DONGGALA',
                'latitude' => -0.58333,
                'longitude' => 119.85,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 19,
                'province_id' => 1,
                'name' => 'KABUPATEN TOLI-TOLI',
                'alt_name' => 'KABUPATEN TOLI-TOLI',
                'latitude' => 1.30862,
                'longitude' => 120.88643,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 20,
                'province_id' => 1,
                'name' => 'KABUPATEN BUOL',
                'alt_name' => 'KABUPATEN BUOL',
                'latitude' => 0.75,
                'longitude' => 120.75,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 21,
                'province_id' => 1,
                'name' => 'KABUPATEN PARIGI MOUTONG',
                'alt_name' => 'KABUPATEN PARIGI MOUTONG',
                'latitude' => 0.3368,
                'longitude' => 120.17841,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 22,
                'province_id' => 1,
                'name' => 'KABUPATEN TOJO UNA-UNA',
                'alt_name' => 'KABUPATEN TOJO UNA-UNA',
                'latitude' => -1.2036,
                'longitude' => 121.48201,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 23,
                'province_id' => 1,
                'name' => 'KABUPATEN SIGI',
                'alt_name' => 'KABUPATEN SIGI',
                'latitude' => -1.385,
                'longitude' => 119.96694,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 24,
                'province_id' => 1,
                'name' => 'KABUPATEN BANGGAI LAUT',
                'alt_name' => 'KABUPATEN BANGGAI LAUT',
                'latitude' => -1.61841,
                'longitude' => 123.49388,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 25,
                'province_id' => 1,
                'name' => 'KABUPATEN MOROWALI UTARA',
                'alt_name' => 'KABUPATEN MOROWALI UTARA',
                'latitude' => -1.7207,
                'longitude' => 121.24649,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id' => 26,
                'province_id' => 1,
                'name' => 'KOTA PALU',
                'alt_name' => 'KOTA PALU',
                'latitude' => -0.86972,
                'longitude' => 119.9,
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
        Schema::dropIfExists('regencies');
    }
};