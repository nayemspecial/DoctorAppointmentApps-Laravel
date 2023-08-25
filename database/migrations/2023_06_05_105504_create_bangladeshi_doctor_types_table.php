<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('doctor_type', function (Blueprint $table) {
            $table->id();
            $table->string('name', 20);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('deleted_at')->nullable();
        });

        // Generate 20 Bangladeshi doctor types
        $faker = Faker::create('bn_BD');
        for ($i = 0; $i < 20; $i++) {
            DB::table('doctor_types')->insert([
                'name' => $faker->jobTitle(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_type');
    }
};

