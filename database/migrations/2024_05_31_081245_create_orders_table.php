<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('Product_id')->constrained();
            $table->string('Productname');
            $table->string('productImg');
            $table->string('productprice');
            $table->string('quantity');
            $table->string('total');
            $table->foreignId('Address_id')->constrained();
            $table->boolean('payment_status');
            $table->string('Delivery-status');
            $table->string('Tracking_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
