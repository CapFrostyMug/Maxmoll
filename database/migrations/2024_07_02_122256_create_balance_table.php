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
        Schema::create('balance', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')
                ->nullable(false)
                ->constrained('products')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreignId('warehouse_id')
                ->nullable(false)
                ->constrained('warehouses')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->integer('count')->default(0);
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
        Schema::dropIfExists('balance');
    }
};
