<?php

namespace Database\Seeders;

use App\Models\LevelMaturity;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AspekMaturitySeeder::class,
            IndikatorMaturitySeeder::class,
            KriteriaMaturitySeeder::class,
            LevelMaturitySeeder::class,
            UserSeeder::class,
        ]);
    }
}
