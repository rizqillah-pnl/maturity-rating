<?php

namespace Database\Seeders;

use App\Models\LevelMaturity;
use Illuminate\Database\Seeder;

class LevelMaturitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LevelMaturity::create([
            'nama_level' => 'Initial',
            'color' => 'danger',
        ]);
        LevelMaturity::create([
            'nama_level' => 'Managed',
            'color' => 'warning',
        ]);
        LevelMaturity::create([
            'nama_level' => 'Defined',
            'color' => 'orange',
        ]);
        LevelMaturity::create([
            'nama_level' => 'Predicatable',
            'color' => 'primary',
        ]);
        LevelMaturity::create([
            'nama_level' => 'Optimizing',
            'color' => 'success',
        ]);
    }
}
