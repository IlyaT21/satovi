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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->mediumText('product_desc');
            $table->string('product_category')->nullable();
            $table->string('product_waterproof')->nullable();
            $table->string('product_type')->nullable();
            $table->string('product_price');
            $table->string('product_image')->default('images/product/default.jpg');
            $table->boolean('outlet')->default(0);
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
        Schema::dropIfExists('products');
    }
};
