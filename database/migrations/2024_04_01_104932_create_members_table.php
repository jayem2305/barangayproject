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
            $table->unsignedBigInteger('resident_id');
            $table->foreign('resident_id')->references('id')->on('residents')->onDelete('cascade');
            $table->string('lname_member');
            $table->string('fname_member');
            $table->string('mname_member');
            $table->string('ext_member');
            $table->string('household_member');
            $table->string('birth_member');
            $table->string('bday_member');
            $table->string('age_member');
            $table->string('gender_member');
            $table->string('civil_member');
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
