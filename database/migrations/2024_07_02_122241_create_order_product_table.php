<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')
                ->nullable(false)
                ->constrained('orders')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreignId('product_id')
                ->nullable(false)
                ->constrained('products')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->integer('count')->nullable(false);
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
        Schema::dropIfExists('order_product');
    }
};
