<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('study_id');
            $table->string('participant_name');
            $table->string('UPN');
            $table->string('age');
            $table->string('gender');
            $table->string('study_site');
            $table->string('participant_nickname')->nullable();
            $table->string('caregiver_name')->nullable();
            $table->string('caregiver_contact_phone')->nullable();
            $table->string('caregiver_alt_phone')->nullable();
            $table->string('relationship_with_participant')->nullable();
            $table->string('location')->nullable();
            $table->mediumText('location_description');
            $table->string('barrier_category');
            $table->string('barriers');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
}
