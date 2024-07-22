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
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->foreignId('information_id')->constrained();

            $table->string('date');
            $table->foreignId('doctype_id')->constrained();
            $table->string('number');
            $table->foreignId('level_id')->constrained();
            $table->string('qualification');
            $table->string('speciality');
            $table->string('rank');
            $table->string('education_form');
            $table->string('institution');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('education');
    }
};
