<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(WarehousesSeeder::class);
        Product::factory(20)->create();
        $this->call(BalanceSeeder::class);
        $this->call(StatusesSeeder::class);
        $this->call(OrdersSeeder::class);
        $this->call(OrdersProductsSeeder::class);
    }
}
