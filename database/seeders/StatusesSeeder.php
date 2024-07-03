<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('statuses')->insert($this->getData());
    }

    /**
     * @return array[]
     */
    private function getData(): array
    {
        return [
            [
                'name' => 'В работе',
                'bootstrap_style' => 'table-warning',
            ],
            [
                'name' => 'Завершён',
                'bootstrap_style' => 'table-success',
            ],
            [
                'name' => 'Отменён',
                'bootstrap_style' => 'table-danger',
            ],
        ];
    }
}
