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
        Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->decimal('price', 8, 2);
        $table->integer('quantity');
        $table->string('status');
        $table->date('order_date');
        $table->date('delivery_date');
        $table->timestamps();
        $table->string('status')->default('pending');


    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
