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
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('information_id')->constrained();

            $table->string('date');         
            $table->string('transfers_occasion');
            $table->foreignId('division_id')->constrained();
            $table->string('etc_persent');         
            $table->string('contract_persent');         
            $table->string('contract_beginning');         
            $table->string('contract_ending');         
            $table->foreignId('position_id')->constrained();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfers');
    }
};
