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
        Schema::create('data_first', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('responden_id')->unsigned()->index()->nullable();
            $table->foreign('responden_id')->references('id')->on('responden_data')->onDelete('cascade');
            
            $table->string('data_que_one');
            $table->string('data_que_two');
            $table->string('data_que_three');
            $table->string('data_que_four');
            $table->string('data_que_five');
            $table->string('data_que_six');
            $table->string('data_que_seven');
            $table->string('data_que_eight');
            $table->string('data_que_nine');
            $table->string('data_que_ten');
            $table->string('data_que_eleven');
            $table->string('data_que_twelve');
            $table->string('data_que_thirteen');
            $table->string('data_que_fourteen');
            $table->string('data_que_fifteen');
            $table->string('data_que_sixteen');
            $table->string('data_que_seventeen');
            $table->string('data_que_eighteen');
            $table->string('data_que_nineteen');
            $table->string('data_que_twenty');
            $table->string('data_que_twentyone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_first');
    }
};
