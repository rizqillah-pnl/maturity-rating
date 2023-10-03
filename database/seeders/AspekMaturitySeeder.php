<?php

namespace Database\Seeders;

use App\Models\AspekMaturity;
use Illuminate\Database\Seeder;

class AspekMaturitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AspekMaturity::create([
            'kode_aspek' => 'KE',
            'nama_aspek' => 'Keuangan',
            'bobot' => 25
        ]);
        AspekMaturity::create([
            'kode_aspek' => 'PL',
            'nama_aspek' => 'Pelayanan',
            'bobot' => 20
        ]);
        AspekMaturity::create([
            'kode_aspek' => 'KI',
            'nama_aspek' => 'Kapabilitas Internal',
            'bobot' => 20
        ]);
        AspekMaturity::create([
            'kode_aspek' => 'TK',
            'nama_aspek' => 'Tata Kelola dan Kepemimpinan',
            'bobot' => 20
        ]);
        AspekMaturity::create([
            'kode_aspek' => 'IN',
            'nama_aspek' => 'Inovasi',
            'bobot' => 10
        ]);
        AspekMaturity::create([
            'kode_aspek' => 'LI',
            'nama_aspek' => 'Lingkungan',
            'bobot' => 5
        ]);
    }
}
