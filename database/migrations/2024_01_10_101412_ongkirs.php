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
        Schema::create('ongkir', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInterger('user_id');
            $table->unsignedBigInterger('item_id');
            $table->foreign('user_id')->reference('id')->on('users')->onDelete('cascade');
            $table->foreign('item_id')->reference('id')->on('items')->onDelete('cascade');
            $table->string('total_berat')->onDelete('cascade');
            $table->string('jarak')->onDelete('cascade');
            $table->timestamps();
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
        Schema::dropIfExists('ongkir');
    }
};
