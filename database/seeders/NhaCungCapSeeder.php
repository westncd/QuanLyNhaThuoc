<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class NhaCungCapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            DB::table('nha_cung_cap')->insert([
                'TenNhaCungCap' => $faker->company(),
                'DiaChi' => $faker->address(),
                'SoDienThoai' => $faker->phoneNumber(),
            ]);
        }
    }
}
