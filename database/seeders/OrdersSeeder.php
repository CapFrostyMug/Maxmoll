<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('orders')->insert($this->getData());
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
                'customer' => fake()->userName(),
                'warehouse_id' => fake()->numberBetween(1, 3),
                'status_id' => fake()->numberBetween(1, 3),
                'completed_at' => fake()->date(),
                'created_at' => fake()->date(),
                'updated_at' => fake()->date(),
            ];
        }

        return $data;
    }
}
