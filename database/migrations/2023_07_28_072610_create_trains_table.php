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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda');
            $table->string('partenza');
            $table->string('arrivo');
            $table->date('data_partenza');
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->smallInteger('codice_treno');
            $table->tinyInteger('n_vagone');
            $table->boolean('on_time');
            $table->boolean('delayed'); 
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
        Schema::dropIfExists('trains');
    }
};
