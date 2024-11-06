<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class PhieuThuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            DB::table('phieu_thu')->insert([
                'MaHoaDon' => $faker->numberBetween(1, 10),
                'NgayLap' => $faker->date(),
                'NguoiLap' => $faker->name(),
                'SoTien' => $faker->numberBetween(100000, 1000000),
            ]);
        }
    }
}
