<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class ChiTietHoaDonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            DB::table('chi_tiet_hoa_don')->insert([
                'MaHoaDon' => $faker->numberBetween(1, 10),
                'MaThuoc' => $faker->numberBetween(1, 10),
                'SoLuong' => $faker->numberBetween(1, 50),
                'ThanhTien' => $faker->numberBetween(10000, 500000),
            ]);
        }
    }
}
