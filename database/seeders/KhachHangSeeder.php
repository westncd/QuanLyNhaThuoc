<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class KhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            DB::table('khach_hang')->insert([
                'TenKhachHang' => $faker->name(),
                'SoDienThoai' => $faker->phoneNumber(),
                'DiaChi' => $faker->address(),
                'DiemTichLuy' => $faker->numberBetween(0, 1000),
            ]);
        }
    }
}
