<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('email', 60);
            $table->string('mobile', 12);
            $table->string('phone', 12)->nullable();
            $table->string('visa', 5)->nullable();
            $table->string('licfed', 5)->nullable();
            $table->string('resume', 191)->nullable();
            $table->string('perfil', 191);
            $table->string('opcion', 10);
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
        Schema::dropIfExists('applicants');
    }
}
