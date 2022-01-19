<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatabrg2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('databrg2', function (Blueprint $table) {
            $table->id();
            $table->string("id_barang");
            $table->string("id_suplier");
            $table->string("jenis");
            $table->string("size");
            $table->string("warna");
            $table->string("qty");
            $table->string("harga");

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
        Schema::dropIfExists('databrg2');
    }
}
