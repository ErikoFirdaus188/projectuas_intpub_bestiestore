<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatabrgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('databrg', function (Blueprint $table) {
            $table->id("id_barang");
            $table->string("id_suplier",100);
            $table->string("jenis",100);
            $table->string("size",100);
            $table->string("warna",100);
            $table->string("qty",100);
            $table->string("harga",100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('databrg');
    }
}
