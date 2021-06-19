<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('names', 45);
            $table->string('lastnames', 45);
            $table->string('profession', 75);
            $table->string('email')->unique();
            $table->string('password', 100);
            $table->string('document', 25);
            $table->string('phone', 15);
            $table->string('mobile', 25);
            $table->boolean('status');
            $table->string('profile_picture');
            $table->unsignedBigInteger('gender_id');
            $table->unsignedBigInteger('document_type_id');
            $table->foreign('document_type_id')->references('id')->on('document_types');
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->unsignedBigInteger('role_id');
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->foreignId('current_team_id')->nullable();
            $table->text('profile_photo_path')->nullable();
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
        Schema::dropIfExists('users');
    }
}
