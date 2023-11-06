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
        Schema::create('courseware', function (Blueprint $table) {
            $table->increments('id');
            $table->string('path');
            $table->string('name');
            $table->integer('app_id');
            $table->integer('type');
            $table->bigInteger('size');
            $table->string('description');
            $table->integer('time_create');
            $table->integer('time_update');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courseware');
    }
};
