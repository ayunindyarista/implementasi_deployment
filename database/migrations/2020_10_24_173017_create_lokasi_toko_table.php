<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLokasiTokoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasi_toko', function (Blueprint $table) {
            $table->string('BARCODE', 8)->primary();
            $table->string('NAMA_TOKO', 50);
            $table->double('LATITUDE');
            $table->double('LONGITUDE');
            $table->double('ACURACY');
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
        Schema::dropIfExists('lokasi_toko');
    }
}
