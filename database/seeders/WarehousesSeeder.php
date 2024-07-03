<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WarehousesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('warehouses')->insert($this->getData());
    }

    /**
     * @return array[]
     */
    private function getData(): array
    {
        return [
            [
                'name' => 'Wildberries'
            ],
            [
                'name' => 'Ozon'
            ],
            [
                'name' => 'Яндекс Маркет'
            ],
        ];
    }
}
