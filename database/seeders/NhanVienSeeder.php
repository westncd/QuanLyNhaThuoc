<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class NhanVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            DB::table('nhan_vien')->insert([
                'HoTen' => $faker->name(),
                'NgaySinh' => $faker->date('Y-m-d', '2000-01-01'),
                'DiaChi' => $faker->address(),
                'SoDienThoai' => $faker->phoneNumber(),
            ]);
        }
    }
}
