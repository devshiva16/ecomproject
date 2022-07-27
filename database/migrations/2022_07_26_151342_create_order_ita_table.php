<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_ita', function (Blueprint $table) {
            $table->id();
            $table->string('product_id');
            $table->string('quantity');
            $table->string('rate');
            $table->string('total');
            $table->string('order_id');
            $table->string('discount');
            $table->string('status');
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
        Schema::dropIfExists('order_ita');
    }
}
