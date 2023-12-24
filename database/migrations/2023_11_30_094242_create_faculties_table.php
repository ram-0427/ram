<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facultymst', function (Blueprint $table) {
            $table->faculty_id();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('facultymst', function (Blueprint $table) {
            $table->id('faculty_id');
            $table->string('faculty_name');
            $table->string('faculty_email')->unique();
            $table->timestamps();
        });
    }
};
