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
            'nama_aspek' => 'Keuangan'
        ]);
        AspekMaturity::create([
            'kode_aspek' => 'PL',
            'nama_aspek' => 'Pelayanan'
        ]);
        AspekMaturity::create([
            'kode_aspek' => 'KI',
            'nama_aspek' => 'Kapabilitas Internal'
        ]);
        AspekMaturity::create([
            'kode_aspek' => 'TK',
            'nama_aspek' => 'Tata Kelola dan Kepemimpinan'
        ]);
        AspekMaturity::create([
            'kode_aspek' => 'IN',
            'nama_aspek' => 'Inovasi'
        ]);
        AspekMaturity::create([
            'kode_aspek' => 'LI',
            'nama_aspek' => 'Lingkungan'
        ]);
    }
}
