<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->string('name')->nullable();
            // $table->string('code')->nullable();
            // $table->string('short_name')->nullable();
            $table->string('price')->nullable();
            // $table->string('sale_price')->nullable();
            $table->string('unit')->nullable();
            $table->string('weight')->nullable();
            $table->string('sku')->nullable();
            $table->integer('category')->nullable();
            $table->integer('sub_category')->nullable();
            $table->string('product_category')->nullable();
            $table->text('discription')->nullable();
            $table->boolean('is_discount')->nullable();
            $table->boolean('status');
            $table->boolean('is_delete');
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
