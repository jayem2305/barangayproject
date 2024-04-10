<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('resident_id');
            $table->foreign('resident_id')->references('reg_number')->on('residents')->onDelete('cascade');
            $table->string('lname_member');
            $table->string('fname_member');
            $table->string('mname_member');
            $table->string('ext_member')->nullable();
            $table->string('household_member');
            $table->string('birth_member');
            $table->date('bday_member');
            $table->integer('age_member');
            $table->string('gender_member');
            $table->string('civil_member');
            $table->string('citizenship_member');
            $table->string('occupation_member');
            $table->string('indicate_if_member')->nullable();
            $table->string('valid_id_member');
            $table->string('image_member');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('members');
    }
}
