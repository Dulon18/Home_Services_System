<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking__details', function (Blueprint $table) {
            $table->id();
            $table->integer('orderId');
            $table->integer('customer_id');
            $table->integer('total_price');
            $table->integer('Area');
            $table->integer('Sector');
            $table->string('address');
            $table->date('requestDate');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('booking__details');
    }
}
