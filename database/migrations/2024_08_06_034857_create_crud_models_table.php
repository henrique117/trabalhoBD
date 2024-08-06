<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrudModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Atleta', function (Blueprint $table) {
            $table->id('idAtleta');
            $table->string('nomeAtleta', 50);
            $table->char('sexo', 1);
            $table->float('peso', 5, 2);
            $table->string('nacionalidade', 45);
            $table->float('altura', 5, 2);
            $table->date('dataNasc');
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
        Schema::dropIfExists('Atleta');
    }
}
