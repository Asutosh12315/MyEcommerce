<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->integer('product_id');
            $table->string('product_name');
            $table->integer('user_id');
            $table->string('name');
            $table->string('cname');
            $table->string('email');
            $table->string('city');
            $table->integer('zip');
            $table->string('faddress');
            $table->string('messages');
            $table->string('status');
            $table->string('payment_option');
            $table->string('payment_status');
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
        Schema::dropIfExists('orders');
    }
}
