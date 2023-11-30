<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOcupacionesTable extends Migration
{
    public function up()
    {
        Schema::create('ocupaciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 150);
        });
    }

    public function down()
    {
        Schema::dropIfExists('ocupaciones');
    }
}