<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Carros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        	Schema::create('carros', function (Blueprint $table)
	 {
           		    $table->increments('id');
                    $table->text('placa');
                    $table->text('orgao');
                    $table->text('url');
                    $table->text('descricao');
                    $table->text('latitude');
                    $table->text('longitude');
                    $table->dateTime('dataEhora');
                    $table->char('status')->default('N');
        	});
    }

    public function down()
    {
        	Schema::dropIfExists('carros');
    }
}
