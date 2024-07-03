<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BalanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('balance')->insert($this->getData());
    }

    private function getData(): array
    {
        $data = [];
        $count = 100;

        for ($i = 1; $i <= $count; $i++) {
            $data[] = [
                'product_id' => fake()->numberBetween(1, 20),
                'warehouse_id' => fake()->numberBetween(1, 3),
                'count' => fake()->numberBetween(0, 100),
            ];
        }

        return $data;
    }
}
