<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKasusglobalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kasusglobals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_negara');
            $table->bigInteger('positif');
            $table->bigInteger('sembuh');
            $table->bigInteger('meninggal');
            $table->date('tanggal');
            $table->foreign('id_negara')->references('id')->on('negaras')->onDelete('cascade');
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
        Schema::dropIfExists('kasusglobals');
    }
}
