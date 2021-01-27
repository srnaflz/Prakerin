<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRWSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_w_s', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_kelurahan')->unsigned();
            $table->string('nama_rw');
            $table->timestamps();

            $table->foreign('id_kelurahan')
            ->references('id')
            ->on('kelurahans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('r_w_s');
    }
}
