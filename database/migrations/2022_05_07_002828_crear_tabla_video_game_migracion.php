<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_game_consoles', function (Blueprint $table) {
            $table->id();

            //Columnas propias
            $table->string('reference');
            $table->integer('number_of_controllers');
            $table->string('is_especial_edition');
            $table->date('release_year');

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
        Schema::dropIfExists('Video_Game_consoles');
    }
};
