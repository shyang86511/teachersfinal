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
            $table->string('name');
            $table->integer('animation_classification_id')->unsigned();
            $table->foreign('animation_classification_id')
                  ->references('id')
                  ->on('Animation_classifications')
                  ->onDelete('cascade');
            $table->string('Original_author');
            $table->string('Manufacturer');
            $table->string('url');
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
