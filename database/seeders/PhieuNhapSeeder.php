<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class PhieuNhapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1, 100) as $index) {
            DB::table('phieu_nhap')->insert([
                'NgayNhap' => $faker->date(),
                'MaThuoc' => $faker->numberBetween(1, 10),
                'TenThuoc' => $faker->word(),
                'SoLuong' => $faker->numberBetween(10, 500),
                'MaNhaCungCap' => $faker->numberBetween(1, 5),
            ]);
        }
    }
}
