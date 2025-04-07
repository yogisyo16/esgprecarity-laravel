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
            
            $table->string('data_que_one')->nullable();
            $table->string('data_que_two')->nullable();
            $table->string('data_que_three')->nullable();
            $table->string('data_que_four')->nullable();
            $table->string('data_que_five')->nullable();
            $table->string('data_que_six')->nullable();
            $table->string('data_que_seven')->nullable();
            $table->string('data_que_eight')->nullable();
            $table->string('data_que_nine')->nullable();
            $table->string('data_que_ten')->nullable();
            $table->string('data_que_eleven')->nullable();
            $table->string('data_que_twelve')->nullable();
            $table->string('data_que_thirteen')->nullable();
            $table->string('data_que_fourteen')->nullable();
            $table->string('data_que_fifteen')->nullable();
            $table->string('data_que_sixteen')->nullable();
            $table->string('data_que_seventeen')->nullable();
            $table->string('data_que_eighteen')->nullable();
            $table->string('data_que_nineteen')->nullable();
            $table->string('data_que_twenty')->nullable();
            $table->string('data_que_twentyone')->nullable();
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
