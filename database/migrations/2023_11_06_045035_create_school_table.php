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
        Schema::create('school', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('province_id');
            $table->integer('district_id');
            $table->integer('ward_id');
            $table->string('address');
            $table->integer('type');
            $table->integer('time_create');
            $table->integer('time_update');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
