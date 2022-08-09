<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('about_text')->nullable();
            $table->string('contact_no_1')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('contact_no_2')->nullable();
            $table->string('landline_no')->nullable();
            $table->string('addin_id')->nullable();
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
        Schema::dropIfExists('sales');
    }
}
