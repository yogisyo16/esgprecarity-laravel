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
        Schema::create('responden_data', function (Blueprint $table) {
            $table->id();
            $table->string('email_responden');
            $table->string('name_responden');
            $table->string('gender_responden');
            $table->string('age_responden');
            $table->string('affiliation_responden');
            $table->string('job_responden');
            $table->string('education_responden');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responden_data');
    }
};
