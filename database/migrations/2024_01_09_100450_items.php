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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); 
            $table->unsignedBigInteger('categoryitem_id'); 
            $table->foreign('user_id')->references('id')->on('users')->restrictOnDelete();
            $table->foreign('categoryitem_id')->references('id')->on('categoryitems')->restrictOnDelete();
            $table->string('nama_barang');
            $table->string('harga_barang');
            $table->string('deskripsi');
            $table->integer('stok');
            $table->bigInteger('berat_satuan');
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
        Schema::dropIfExists('items');
    }
};
