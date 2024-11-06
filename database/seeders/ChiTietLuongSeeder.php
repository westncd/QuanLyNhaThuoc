<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class ChiTietLuongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            DB::table('chi_tiet_luong')->insert([
                'MaBangLuong' => $faker->numberBetween(1, 10),
                'MoTa' => $faker->sentence(),
                'SoTien' => $faker->numberBetween(500000, 2000000),
            ]);
        }
    }
}
