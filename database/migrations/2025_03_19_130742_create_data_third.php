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
        Schema::create('data_third', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('responden_id')->unsigned()->index()->nullable();
            $table->foreign('responden_id')->references('id')->on('responden_data')->onDelete('cascade');
            
            $table->string('answer_nominal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_third');
    }
};
