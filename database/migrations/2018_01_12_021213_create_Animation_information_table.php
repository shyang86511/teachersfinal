<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimationInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Animation_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('classification')->unsigned();
            $table->foreign('classification')
                  ->references('id')
                  ->on('Animation_classification')
                  ->onDelete('cascade');
            $table->string('Original_author');
            $table->string('Manufacturer');
            $table->timestamps();
            $table->softDeletes();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Animation_information');
    }
}
