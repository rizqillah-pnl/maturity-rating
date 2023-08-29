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
        $kode = ['KE', 'PL', 'KI', 'TK', 'IN', 'LI'];
        $nama = ['Keuangan', 'Pelayanan', 'Kapabilitas Internal', 'Tata Kelola dan Kepemimpinan', 'Inovasi', 'Lingkungan'];

        foreach ($kode as $index => $value) {
            AspekMaturity::create([
                'kode_aspek' => $value,
                'nama_aspek' => $nama[$index]
            ]);
        }
    }
}
