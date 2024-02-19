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
        Schema::create('performance_evaluations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('posting_record_id');
            $table->foreignUuid('assessor_id');
            $table->tinyInteger('kabms')->comment('knowledge and application of Basic Medical Science');
            $table->tinyInteger('kaacs')->comment('knowledge and application of clinical Science');
            $table->tinyInteger('kpbms')->comment('knowledge of pathological Basis of Medical practice');
            $table->tinyInteger('locc')->comment('level of clinical competence');
            $table->tinyInteger('mr_ht')->comment('Medica; Records- History Taking');
            $table->tinyInteger('mr_aw')->comment('Medica; Records- admission work');
            $table->tinyInteger('mr_pn')->comment('Medica; Records- Progress note');
            $table->tinyInteger('mr_cs')->comment('Medica; Records- Case Summaries');
            $table->tinyInteger('diagnostic_acumen')->comment('Diagnostic Acumen');
            $table->tinyInteger('kaat')->comment('knowledge and application of Therapeutics');
            $table->tinyInteger('iwomoht')->comment('Interaction with other members of the team');
            $table->tinyInteger('cwpe')->comment('Compliance With Proffesional Ethics');
            $table->tinyInteger('artc')->comment('Appropriate response to criticism');
            $table->tinyInteger('atutl')->comment('Ability to use the library');
            $table->tinyInteger('atpcdr')->comment('Ability to present cases during rounds');
            $table->tinyInteger('atlaacs')->comment('Ability to learn and apply clinical skills');
            $table->tinyInteger('auodf')->comment('Appropriate use of diagnostic facilities');
            $table->tinyInteger('mat')->comment('Appropriate use of diagnostic facilities');
            $table->tinyInteger('side_laboratories')->comment('side laboratory');
            $table->tinyInteger('laboratory_request')->comment('laboratory request');
            $table->tinyInteger('radiology_request')->comment('laboratory request');
            $table->tinyInteger('follow_up_of_results')->comment('follow up of results');
            $table->tinyInteger('punctuality')->comment('punctuality');
            $table->tinyInteger('availablity')->comment('availablity');
            $table->tinyInteger('endurance')->comment('endurance');
            $table->tinyInteger('personal_comportment')->comment('personal_comportment');
            $table->tinyInteger('neatness')->comment('neatness and appropriate attire');
            $table->tinyInteger('sense_of_responsibility')->comment('Sense ofresponsibility');
            $table->tinyInteger('interpersonal')->comment('Interpersonal Relationship');
            $table->tinyInteger('rwha')->comment('Relationship with Hospital Authority');
            $table->tinyInteger('overall_evaluation')->comment('Overall Evaluation');
            $table->text('general_comments')->comment('General Comments');
            $table->boolean('is_fit');
            $table->text('if_is_fit_is_no_comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('performance_evaluations');
    }
};
