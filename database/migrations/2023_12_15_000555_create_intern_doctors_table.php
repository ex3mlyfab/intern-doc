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
        Schema::create('intern_doctors', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('surname', 125);
            $table->string('first_name', 125);
            $table->string('middle_name', 125)->nullable();
            $table->text('permanent_address')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('password');
            $table->string('medical_school')->nullable();
            $table->date('medical_school_starts')->nullable();
            $table->date('medical_school_ends')->nullable();
            $table->string('qualification_obtained')->nullable();
            $table->date('qualification_obtained_date')->nullable();
            $table->string('mdcan_reg_number')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->date('mdcan_reg_date')->nullable();
            $table->string('file_no')->nullable();
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->tinyInteger('intern_status')->default(0);
            $table->string('full_name')->virtualAs("CONCAT(first_name, ' ',middle_name, ' ', surname)" );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('intern_doctors');
    }
};
