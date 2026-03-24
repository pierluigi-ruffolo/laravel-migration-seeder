<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency');
            $table->string('departure_station');
            $table->string('arrival_station');
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->string('train_code');
            $table->unsignedTinyInteger('number_of_carriages');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
