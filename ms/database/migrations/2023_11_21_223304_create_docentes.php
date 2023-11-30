<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocentesTable extends Migration
{
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();
            $table->string('cod', 5)->unique();
            $table->string('nombre', 250);
            $table->unsignedBigInteger('idOcupacion');
            $table->foreign('idOcupacion')->references('id')->on('ocupaciones');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('docentes');
    }
}