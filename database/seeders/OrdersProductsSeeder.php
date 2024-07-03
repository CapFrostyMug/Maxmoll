<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('order_product')->insert($this->getData());
    }

    /**
     * @return array
     */
    private function getData(): array
    {
        $data = [];
        $count = 100;

        for ($i = 1; $i <= $count; $i++) {
            $data[] = [
                'order_id' => fake()->numberBetween(1, 100),
                'product_id' => fake()->numberBetween(1, 20),
                'count' => fake()->numberBetween(1, 100),
            ];
        }

        return $data;
    }
}
