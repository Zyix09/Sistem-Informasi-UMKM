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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('keranjang_id');
            $table->foreign('user_id')->references('id')->on('users')->restrictOnDelete();
            $table->foreign('keranjang_id')->references('id')->on('keranjangs')->restrictOnDelete();
            $table->string('reference');
            $table->string('merchant_ref');
            $table->integer('total_amount');
            $table->enum('status', ['paid', 'pending', 'unpaid'])->default('unpaid');
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
        Schema::dropIfExists('pembayarans');
    }
};
