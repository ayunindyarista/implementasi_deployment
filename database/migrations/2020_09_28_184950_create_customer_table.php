<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->string('ID_CUSTOMER', 10)->primary();
            $table->integer('ID_KELURAHAN')->index('FK_MEMILIKI4');
            $table->string('NAMA', 50);
            $table->string('ALAMAT', 50);
            $table->binary('FOTO')->nullable();
            $table->string('FILE_PATH', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
