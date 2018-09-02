<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('product_id');
            $table->foreign('product_id')
              ->references('id')->on('product')
              ->onDelete('cascade');

            $table->unsignedInteger('invoice_id');
            $table->foreign('invoice_id')
              ->references('id')->on('invoice')
              ->onDelete('cascade');

            $table->bigInteger('Quantity');
            $table->decimal('TotalPrice');
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
        Schema::dropIfExists('item');
    }
}
