<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class HoaDonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            DB::table('hoa_don')->insert([
                'NgayLap' => $faker->date(),
                'MaKhachHang' => $faker->numberBetween(1, 10),
                'MaNhanVien' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
