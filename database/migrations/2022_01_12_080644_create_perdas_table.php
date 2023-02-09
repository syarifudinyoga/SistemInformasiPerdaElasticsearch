<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerdasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perdas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipe_dokumen');
            $table->string('peraturan_daerah');
            $table->string('no_perda');
            $table->string('tahun');
            $table->string('user_id');
            $table->string('file');
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
        Schema::dropIfExists('perdas');
    }
}
