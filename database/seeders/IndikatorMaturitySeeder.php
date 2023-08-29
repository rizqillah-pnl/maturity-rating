<?php

namespace Database\Seeders;

use App\Models\IndikatorMaturity;
use Illuminate\Database\Seeder;

class IndikatorMaturitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kode = ['KE.1', 'KE.2', 'KE.3', 'KE.4', 'PL.1', 'PL.2', 'PL.3', 'PL.4', 'KI.1', 'KI.2', 'KI.3', 'KI.4', 'TK.1', 'TK.2', 'TK.3', 'TK.4', 'TK.5', 'IN.1', 'IN.2', 'IN.3', 'IN.4', 'LI.1', 'LI.2'];
        $nama = ['Likuiditas', 'Efisiensi', 'Efektifitas', 'Tingkat Kemandirian', 'Indeks Kepuasan Masyarakat', 'Efisiensi Waktu Pelayanan', 'Sistem Pengaduan Layanan', 'Tingkat Keberhasilan Pemenuhan Layanan', 'Sumber Daya Manusia', 'Proses Bisnis', 'Teknologi', 'Customer Focus', 'Perencanaan Strategis', 'Etika Bisnis', 'Stakeholders Relationship', 'Manajemen Risiko', 'Pengawasan dan Pelaporan', 'Keterlibatan Pengguna Jasa', 'Proses Inovasi', 'Manajemen Pengetahuan', 'Manajemen Perubahan', 'Environmental Footprint Management', 'Penggunaan Sumber Daya'];

        foreach ($kode as $index => $value) {
            IndikatorMaturity::create([
                'kode_indikator' => $value,
                'nama_indikator' => $nama[$index]
            ]);
        }
    }
}
