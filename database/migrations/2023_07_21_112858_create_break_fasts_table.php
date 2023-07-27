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
        Schema::create('break_fasts', function (Blueprint $table) {
            $table->id();
            $table->string('breakfastname');
            $table->text('breakfastsummary');
            $table->integer('price');
            $table->integer('breakstatus');
            $table->string('breakfoobimg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('break_fasts');
    }
};
