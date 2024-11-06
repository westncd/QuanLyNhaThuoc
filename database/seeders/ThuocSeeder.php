<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class ThuocSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            DB::table('thuoc')->insert([
                'TenThuoc' => $faker->word(),
                'NhomLoaiThuoc' => $faker->randomElement(['Nhóm A', 'Nhóm B', 'Nhóm C']),
                'HangSanXuat' => $faker->company(),
                'HanSuDung' => $faker->dateTimeBetween('now', '+2 years')->format('Y-m-d'),
                'SoLuong' => $faker->numberBetween(10, 1000),
                'Gia' => $faker->numberBetween(100000, 500000),
            ]);
        }
    }
}
