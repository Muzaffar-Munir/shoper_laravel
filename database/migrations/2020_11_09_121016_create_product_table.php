<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->string('product_name');
            $table->integer('category_id');
            $table->integer('tab_id');
            $table->integer('shop_id');
            $table->string('product_price');
            $table->string('product_ram')->default(0);
            $table->string('product_rom')->default(0);
            $table->string('product_fcam')->default(0);
            $table->string('product_bcam')->default(0);
            $table->string('product_slug')->default(0);
            $table->text('product_short_description');
            $table->text('product_long_description');
            $table->string('product_image');
            $table->string('product_status');
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
}
