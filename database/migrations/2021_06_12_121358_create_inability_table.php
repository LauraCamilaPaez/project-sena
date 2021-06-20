<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInabilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inability', function (Blueprint $table) {
            $table->id();
            $table->string('names', 45);
            $table->string('lastnames', 45);
            $table->string('email')->unique();
            // $table->string('password', 100);
            // $table->string('gender', 45);
            $table->string('document_type', 25);
            $table->string('document', 25);
            $table->string('phone', 15);
            $table->string('mobile', 25);
            $table->string('messages', 100);
            $table->string('pdf', 100);
            // $table->rememberToken();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->foreignId('current_team_id')->nullable();
            // $table->text('profile_photo_path')->nullable();
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
        Schema::dropIfExists('inability');
    }
}

