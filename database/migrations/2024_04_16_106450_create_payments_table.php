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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id');
            $table->decimal('amount', 10, 2);
            $table->enum('payment_method' , ['credit card' , 'PayPal', 'cash on delivery']);
            $table->enum('status' , ['pending' , 'processing', 'shipped', 'delivered']);
            $table->enum('payment_type' , ['full payment' , 'partial payment', 'deposit']);
            $table->date('payment_date')->nullable();
            $table->longText('payment_details')->nullable();
            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('orders')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
