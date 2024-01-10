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
            $table->unsignedBigInterger('user_id');
            $table->unsignedBigInterger('foto_id');
            $table->foreign('user_id')->reference('id')->on('users')->onDelete('cascade');
            $table->foreign('foto_id')->reference('id')->on('foto_items')->onDelete('cascade');
            $table->string('nama_barang');
            $table->bigInteger('berat_satuan');
            $table->string('deskripsi');
            $table->integer('stok');
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
