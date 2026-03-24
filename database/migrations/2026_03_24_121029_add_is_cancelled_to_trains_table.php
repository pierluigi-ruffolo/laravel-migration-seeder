<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('trains', function (Blueprint $table) {

            $table->boolean('is_cancelled')->after('is_on_time');
        });
    }


    public function down(): void
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('is_cancelled');
        });
    }
};
