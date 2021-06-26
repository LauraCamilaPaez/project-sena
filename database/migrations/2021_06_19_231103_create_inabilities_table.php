<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inabilities', function (Blueprint $table) {
            $table->id();
            $table->date('date_start');
            $table->date('date_end');
            $table->string('names', 45);
            $table->string('lastnames', 45);
            $table->string('email', 45);
            $table->string('gender', 45);
            $table->string('document_type', 25);
            $table->string('document', 25);
            $table->string('phone', 15);
            $table->string('mobile', 25);
            $table->string('pdf');
            // $table->unsignedBigInteger('role_id');
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
        Schema::dropIfExists('inabilities');
    }
}
