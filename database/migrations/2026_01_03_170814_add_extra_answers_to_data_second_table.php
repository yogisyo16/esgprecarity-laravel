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
        Schema::table('data_second', function (Blueprint $table) {
            // Adding columns after the existing ones for better organization
            $table->string('value_answer_second')->nullable()->after('value_answer');
            $table->string('nominal_answer_second')->nullable()->after('nominal_answer');
        });
    }

    public function down(): void
    {
        Schema::table('data_second', function (Blueprint $table) {
            // This removes them if you ever need to rollback
            $table->dropColumn(['value_answer_second', 'nominal_answer_second']);
        });
    }
};
