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
        Schema::create('provinces', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('alt_name')->default('');
            $table->double('latitude')->default(0);
            $table->double('longitude')->default(0);
            $table->timestamps();
        });

        // Memanggil seeder setelah tabel dibuat
        $now = Carbon::now();
        DB::table('provinces')->insert([
            [
                'id' => 1,
                'name' => 'SULAWESI TENGAH',
                'alt_name' => 'SULAWESI TENGAH',
                'latitude' => -1.69378,
                'longitude' => 120.80886,
                'created_at' => $now,
                'updated_at' => $now,
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provinces');
    }
};