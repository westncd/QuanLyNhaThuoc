<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class BangLuongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            DB::table('bang_luong')->insert([
                'MaNhanVien' => $faker->numberBetween(1, 10),
                'Thang' => $faker->dateTimeThisYear()->format('Y-m-d'),
                'LuongCoBan' => $faker->numberBetween(5000000, 10000000),
                'ThuongChuyenCan' => $faker->numberBetween(500000, 2000000),
                'ThuongKPI' => $faker->numberBetween(1000000, 3000000),
                'SoNgayNghi' => $faker->numberBetween(0, 5),
                'TongLuong' => $faker->numberBetween(6000000, 15000000),
            ]);
        }
    }
}
