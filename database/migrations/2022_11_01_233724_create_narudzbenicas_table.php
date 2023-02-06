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
        Schema::create('narudzbenicas', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('city');
            $table->string('street');
            $table->string('zip_code');
            $table->string('email');
            $table->string('items');
            $table->string('payment');
            $table->string('price');
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
        Schema::dropIfExists('narudzbenicas');
    }
};
