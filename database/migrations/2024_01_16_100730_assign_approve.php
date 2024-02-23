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
        Schema::create('assign_approves', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('assign_to')->nullable();
            $table->unsignedBigInteger('approve_by')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->enum('perubahan', ['proses', 'terubah'])->default('proses');
            $table->foreign('assign_to')->references('id')->on('users')->restrictOnDelete();
            $table->foreign('approve_by')->references('id')->on('users')->restrictOnDelete();
            $table->foreign('created_by')->references('id')->on('users')->restrictOnDelete();
            $table->foreign('updated_by')->references('id')->on('users')->restrictOnDelete();
            $table->timestamp('approve_at')->nullable();
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
        Schema::dropIfExists('assign_approves');
    }
};
