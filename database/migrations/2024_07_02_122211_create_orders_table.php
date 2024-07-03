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
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('customer', 255)->nullable(false);
            $table->foreignId('warehouse_id')
                ->nullable(false)
                ->constrained('warehouses')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreignId('status_id')
                ->nullable(false)
                ->constrained('statuses')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->timestamp('completed_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
