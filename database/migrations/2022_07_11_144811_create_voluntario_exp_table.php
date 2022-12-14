<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoluntarioExpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voluntario_exp', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('voluntario_id')->unsigned();
            $table->string('experiencia_nome');
            $table->foreign('voluntario_id')->references('id')->on('voluntarios')->onDelete('cascade');
            
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
        Schema::dropIfExists('voluntario_exp');
    }
}
