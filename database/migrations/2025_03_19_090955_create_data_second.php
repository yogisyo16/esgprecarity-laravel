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
        Schema::create('data_second', function (Blueprint $table) {
            $table->id();
            
            $table->bigInteger('responden_id')->unsigned()->index()->nullable();
            $table->foreign('responden_id')->references('id')->on('responden_data')->onDelete('cascade');
            
            $table->string('data_que_number_second');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_second');
    }
};
