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
            $table->string('product_id')->nullable();
            $table->string('quantity')->nullable();
            $table->string('rate')->nullable();
            $table->string('total')->nullable();
            $table->string('order_id')->nullable();
            $table->string('discount')->nullable();
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
        Schema::dropIfExists('order_ita');
    }
}
