<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->char('name');
            $table->char('ordernumber');
            $table->char('ordersite');
            $table->char('ordersiteurl');
            $table->char('productname');
            $table->float('price');
            $table->float('buyingprice');
            $table->char('shipstatus');
            $table->char('buyingdate');
            $table->integer('unit');
            $table->char('bank');
            $table->tinyInteger('bankstatus');
            $table->tinyInteger('packagereturn');
            $table->char('returntracking');
            $table->char('notes');
            $table->float('cashback');
            $table->float('cashbackmoney');
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
        Schema::drop('orders');
    }
}
