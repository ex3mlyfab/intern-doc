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
        Schema::create('posting_records', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('intern_doctor_id')->constrained();
            $table->foreignId('department_id');
            $table->date('posting_start_date');
            $table->date('posting_end_date');
            $table->boolean('accept_posting')->default(false)->nullable();
            $table->unsignedTinyInteger('posting_status')->default(0);
            $table->foreignUuid('created_by');
            $table->foreignUuid('accepted_by')->nullable(); 
            $table->foreignUuid('approved_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posting_records');
    }
};
