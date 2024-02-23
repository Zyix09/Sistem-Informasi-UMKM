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
        Schema::create('keranjangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('ekspedisi_id');
            $table->foreign('user_id')->references('id')->on('users')->restrictOnDelete();
            $table->foreign('item_id')->references('id')->on('items')->restrictOnDelete();
            $table->foreign('ekspedisi_id')->references('id')->on('ekspedisis')->restrictOnDelete();
            $table->string('jarak');
            $table->string('total_harga');
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
        Schema::dropIfExists('keranjangs');
    }
};
