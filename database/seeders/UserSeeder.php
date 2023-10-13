<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Generator;
use Illuminate\Container\Container;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 2000; $i++) {
            $data[] = [
                'nama' => $faker->name,
                'nik' => $faker->nik,
                'no_telp' => $faker->phoneNumber
            ];
        }

        foreach ($data as $item) {
            User::insert($item);
        }
    }
}
