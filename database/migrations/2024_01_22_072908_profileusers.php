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
        Schema::create('profileusers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('telepon');
            $table->string('lokasi');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('profile')->nullable();
            $table->string('alamat')->nullable();
            $table->string('ktp')->nullable();
            $table->integer('norek')->nullable();
            $table->enum('bank', ['BRI', 'BCA', 'BNI'])->nullable();
            $table->foreign('user_id')->references('id')->on('users')->restrictOnDelete();
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
        Schema::dropIfExists('profileusers');
    }
};
