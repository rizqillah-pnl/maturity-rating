<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\TataKKController;
use App\Http\Controllers\InovasiController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\LingkunganController;
use App\Http\Controllers\KapabilitasInternalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ROOT
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
});


Route::resource('/keuangan', KeuanganController::class);
Route::resource('/pelayanan', PelayananController::class);
Route::resource('/kapabilitas_internal', KapabilitasInternalController::class);
Route::resource('/tata_kk', TataKKController::class);
Route::resource('/inovasi', InovasiController::class);
Route::resource('/lingkungan', LingkunganController::class);


Route::get('/coba', function () {
    $data = [
        'KE.1.1', 'KE.1.2', 'KE.1.3', 'KE.1.4', 'KE.1.5', 'KE.1.6', 'KE.1.7', 'KE.1.8', 'KE.1.9', 'KE.1.10', 'KE.1.11', 'KE.1.12', 'KE.1.13', 'KE.1.14', 'KE.1.15', 'KE.2.1', 'KE.2.2', 'KE.2.3', 'KE.2.4', 'KE.2.5', 'KE.2.6', 'KE.2.7', 'KE.2.8', 'KE.2.9', 'KE.2.10', 'KE.3.1', 'KE.3.2', 'KE.3.3', 'KE.3.4', 'KE.3.5', 'KE.3.6', 'KE.3.7', 'KE.3.8', 'KE.3.9', 'KE.3.10', 'KE.3.11', 'KE.3.12', 'KE.3.13', 'KE.3.14', 'KE.3.15', 'KE.4.1', 'KE.4.2', 'KE.4.3', 'KE.4.4', 'KE.4.5', 'KE.4.6', 'KE.4.7', 'KE.4.8', 'KE.4.9', 'KE.4.10', 'PL.1.1', 'PL.1.2', 'PL.1.3', 'PL.1.4', 'PL.1.5', 'PL.1.6', 'PL.1.7', 'PL.1.8', 'PL.1.9', 'PL.1.10', 'PL.2.1', 'PL.2.2', 'PL.2.3', 'PL.2.4', 'PL.2.5', 'PL.2.6', 'PL.2.7', 'PL.2.8', 'PL.2.9', 'PL.2.10', 'PL.3.1', 'PL.3.2', 'PL.3.3', 'PL.3.4', 'PL.3.5', 'PL.3.6', 'PL.3.7', 'PL.3.8', 'PL.3.9', 'PL.3.10', 'PL.3.11', 'PL.3.12', 'PL.3.13', 'PL.3.14', 'PL.3.15', 'PL.3.16', 'PL.3.17', 'PL.3.18', 'PL.3.19', 'PL.3.20', 'PL.4.1', 'PL.4.2', 'PL.4.3', 'PL.4.4', 'PL.4.5', 'PL.4.6', 'PL.4.7', 'PL.4.8', 'PL.4.9', 'PL.4.10', 'KI.1.1', 'KI.1.2', 'KI.1.3', 'KI.1.4', 'KI.1.5', 'KI.1.6', 'KI.1.7', 'KI.1.8', 'KI.1.9', 'KI.1.10', 'KI.1.11', 'KI.1.12', 'KI.1.13', 'KI.1.14', 'KI.1.15', 'KI.1.16', 'KI.1.17', 'KI.1.18', 'KI.2.1', 'KI.2.2', 'KI.2.3', 'KI.2.4', 'KI.2.5', 'KI.2.6', 'KI.2.7', 'KI.2.8', 'KI.2.9', 'KI.2.10', 'KI.2.11', 'KI.2.12', 'KI.3.1', 'KI.3.2', 'KI.3.3', 'KI.3.4', 'KI.3.5', 'KI.3.6', 'KI.3.7', 'KI.3.8', 'KI.3.9', 'KI.3.10', 'KI.3.11', 'KI.3.12', 'KI.3.13', 'KI.3.14', 'KI.3.15', 'KI.3.16', 'KI.3.17', 'KI.3.18', 'KI.4.1', 'KI.4.2', 'KI.4.3', 'KI.4.4', 'KI.4.5', 'KI.4.6', 'KI.4.7', 'KI.4.8', 'KI.4.9', 'KI.4.10', 'KI.4.11', 'KI.4.12', 'KI.4.13', 'KI.4.14', 'KI.4.15', 'KI.4.16', 'KI.4.17', 'TK.1.1', 'TK.1.2', 'TK.1.3', 'TK.1.4', 'TK.1.5', 'TK.1.6', 'TK.1.7', 'TK.1.8', 'TK.1.9', 'TK.1.10', 'TK.1.11', 'TK.1.12', 'TK.1.13', 'TK.2.1', 'TK.2.2', 'TK.2.3', 'TK.2.4', 'TK.2.5', 'TK.2.6', 'TK.2.7', 'TK.2.8', 'TK.2.9', 'TK.2.10', 'TK.2.11', 'TK.2.12', 'TK.3.1', 'TK.3.2', 'TK.3.3', 'TK.3.4', 'TK.3.5', 'TK.3.6', 'TK.3.7', 'TK.3.8', 'TK.3.9', 'TK.3.10', 'TK.3.11', 'TK.4.1', 'TK.4.2', 'TK.4.3', 'TK.4.4', 'TK.4.5', 'TK.4.6', 'TK.4.7', 'TK.4.8', 'TK.4.9', 'TK.4.10', 'TK.4.11', 'TK.4.12', 'TK.4.13', 'TK.4.14', 'TK.4.15', 'TK.5.1', 'TK.5.2', 'TK.5.3', 'TK.5.4', 'TK.5.5', 'TK.5.6', 'TK.5.7', 'TK.5.8', 'TK.5.9', 'TK.5.10', 'TK.5.11', 'TK.5.12', 'TK.5.13', 'TK.5.14', 'TK.5.15', 'IN.1.1', 'IN.1.2', 'IN.1.3', 'IN.1.4', 'IN.1.5', 'IN.1.6', 'IN.1.7', 'IN.1.8', 'IN.1.9', 'IN.1.10', 'IN.1.11', 'IN.1.12', 'IN.1.13', 'IN.1.14', 'IN.2.1', 'IN.2.2', 'IN.2.3', 'IN.2.4', 'IN.2.5', 'IN.2.7', 'IN.2.8', 'IN.2.9', 'IN.2.10', 'IN.2.11', 'IN.2.12', 'IN.2.13', 'IN.3.1', 'IN.3.2', 'IN.3.3', 'IN.3.4', 'IN.3.5', 'IN.3.6', 'IN.3.7', 'IN.3.8', 'IN.3.9', 'IN.3.10', 'IN.3.11', 'IN.3.12', 'IN.3.13', 'IN.4.1', 'IN.4.2', 'IN.4.3', 'IN.4.4', 'IN.4.5', 'IN.4.6', 'IN.4.7', 'IN.4.8', 'IN.4.9', 'IN.4.10', 'IN.4.11', 'IN.4.12', 'IN.4.13', 'LI.1.1', 'LI.1.2', 'LI.1.3', 'LI.1.4', 'LI.1.5', 'LI.1.6', 'LI.1.7', 'LI.1.8', 'LI.1.9', 'LI.1.10', 'LI.1.11', 'LI.1.12', 'LI.1.13', 'LI.1.14', 'LI.1.15', 'LI.2.1', 'LI.2.2', 'LI.2.3', 'LI.2.4', 'LI.2.5', 'LI.2.6', 'LI.2.7', 'LI.2.8', 'LI.2.9', 'LI.2.10', 'LI.2.11', 'LI.2.12', 'LI.2.13', 'LI.2.14', 'LI.2.15'
    ];
    $work_product = [
        null, null, null, null, null, null, null, null, null, null,
        null, null, null, null, null, null, null, null, null, null,
        null, null, null, null, null, null, null, null, null, null,
        null, null, null, null, null, null, null, null, null, null,
        null, null, null, null, null, null, null, null, null, null,
        null, null, null, null, null, null, null, null, null, null,
        null, null, null, null, null, null, null, null, null, null,
        null, null, null, null, null, null, null, null, null, null,
        null, null, null, null, null, null, null, null, null, null,
        null, null, null, null, null, null, null, null, null, null, 'Tidak ada work product, setidaknya
        pengelolaan SDM baru terbatas pada
        kegiatan personalia dan administrasi
        seperti namun tidak terbatas kepada
        penggajian/remunerasi, pengelolaan
        data SDM, dan lain-lain.', 'Tidak ada work product, setidaknya
        tugas dan peran SDM (misal job
        description) jika ada belum tertuang
        dalam dokumen resmi organisasi.', 'Tidak ada work product, setidaknya
        pelatihan belum pernah diberikan atau
        sudah dilakukan namun tanpa
        perencanaan dan analisa kebutuhan
        yang tepat.', 'Formulir/logbook yang berisi latar
        belakang dan dikualifikasi pegawai
        yang dibutuhkan organisasi.', 'Job description pegawai.', 'Training Need Analysis (TNA), rencana
        pelatihan SDM dan laporan realisasi
        pelatihan pada periode sebelumnya.', 'Daftar perangkat/ infrastruktur
        penunjang kegiatan operasional
        pegawai.', 'Kertas kerja penilaian performa per
        pegawai berisi key performance
        indicator yang disesuaikan dengan
        target individu atau target organisasi
        secara keseluruhan.', 'Kebijakan atau prosedur formal terkait
        pengelolaan SDM yang setidaknya
        mencakup analisis kapabilitas,
        pengukuran beban kerja, kompetensi,
        dan pengetahuan pegawai.', 'Rencana Pengembangan Karir
        Pegawai/ Individual Development
        Plan (IDP) dan Laporan pemantauan dan
        pencapaian rencana
        pengembangan karir pegawai (IDP)', 'Workgroup Report/ Laporan
        Koordinasi Program Kerja yang
        melibatkan antar unit dan antar
        kompetensi.', 'Laporan kegiatan bersama antara
        pegawai dan manajemen yang
        setidaknya membahas permasalahan
        atau masukan pegawai dan
        merumuskannya dalam rencana
        strategis organisasi, misalnya
        stakeholder meeting, employee
        meeting, dll.', 'Laporan pelaksanaan program kerja
        lintas unit.', 'Laporan kinerja per pegawai dan
        tindak lanjutnya.', 'Laporan kegiatan mentoring per
        pegawai. ', 'Kebijakan atau prosedur formal yang
        mencantumkan penilaian aspek inovasi
        dalam target kinerja pegawai/
        individual performance plan (IPP).', 'Research Paper atau Hasil Analisis
        terkait peluang inovasi SDM dalam
        mendorong pertumbuhan organisasi.', 'Task Force Team – Kelompok kerja
        yang dibentuk secara khusus untuk
        melakukan penelitian terkait
        keberlangsungan SDM organisasi.
        Sebagai contoh, melakukan penelitian
        karakter unggul pegawai di era digital.', 'Tidak ada work product, setidaknya
        pengelolaan proses bisnis dilakukan
        berdasarkan permintaan tertentu dan
        baru terbatas pada penetapan jadwal
        dan target kegiatan, penyusunan
        anggaran, serta evaluasi program kerja
        periode sebelumnya. ', 'Tidak ada work product, setidaknya
        tahapan dalam melaksanakan proses bisnis (process flow) jika tersedia
        belum tertuang dalam dokumen resmi
        organisasi.', 'Rencana Strategis Organisasi yang
        mencakup arahan manajemen
        eksekutif, program kerja, serta
        ketersediaan anggaran.', 'Logbook/daftar kebutuhan barang dan
        jasa yang disediakan oleh pihak ketiga
        yang mendukung layanan organisasi. ', 'Kebijakan dan/atau prosedur formal
        terkait pengelolaan proses bisnis yang
        mencakup tujuan proses, input, proses,
        output, serta process owner dari setiap
        tahapan aktivitas.', 'Prosedur pengadaan barang dan jasa,
        yang mencakup siklus pengadaan
        secara lengkap, meliputi:<br>
        <ul>
        <li>Perencanaan dan analisis Kebutuhan</li>
        <li>Persiapan Pengadaan</li>
        <li>Pemilihan Penyedia Barang/Jasa</li>
        <li>Pelaksanaan Kontrak</li>
        <li>Serah Terima Barang/Jasa</li>
        <li>Evaluasi dan Daftar Hitam Penyedia</li>
    </ul>', 'Laporan kinerja per program
    kerja/jenis layanan yang mencakup
    hasil analisis untuk meningkatkan
    kualitas layanan, cycle time,
    peningkatan pendapatan, atau
    penurunan biaya operasional. ', 'Sistem informasi yang berisi data dan
    hasil analisis kinerja per program kerja
    atau aktivitas organisasi.', 'Sistem atau infrastruktur penunjang
    untuk program kolaborasi lintas unit. ', 'Laporan analisis kinerja berbasis
    kantitatif yang mencakup isu dan
    risiko', 'Daftar improvement dan sustainability
    planning untuk meningkatkan kinerja
    proses bisnis dan pertumbuhan
    organisasi. ', 'Laporan analisis stakeholder feedback.
    Sebagai contoh, feedback dari publik
    terkait percepatan registrasi online.', 'Tidak ada work product, setidaknya
    pengelolaan TI baru terbatas pada
    aktivitas penyelesaian isu TI yang
    bersifat teknis (troubleshoot). ', 'Tidak ada work product, setidaknya
    terdapat satu proses yang didukung
    oleh sistem. ', 'Tidak ada work product, setidaknya
    penanganan isu TI tidak tercatat,
    termonitor, dan terselesaikan secara
    tepat.', 'Tidak ada work product, setidaknya
    tata kelola TI hanya terbatas untuk
    penanganan teknis isu TI.', 'Visi dan misi dalam mengelola TI untuk
    memenuhi kebutuhan internal dan
    eksternal. ', 'Daftar perangkat lunak/infrastruktur
    penunjang kegiatan operasional yang
    diaplikasikan pada beberapa proses
    dalam organisasi. ', 'Daftar proses bisnis pada setiap unit
    yang membutuhkan dukungan TI. ', 'Helpdesk TI internal maupun eksternal
    yang tersedia pada portal atau website
    organisasi, namun masih terbatas
    pada penanganan troubleshoot.', 'Kebijakan dan/atau prosedur formal
    tata kelola TI yang meliputi namun
    tidak terbatas pada:<br><ul>
    <li>Back up dan Restore Data</li>
    <li>Gangguan Koneksi Jaringan Lokal atau Utama</li>
    <li>Pemasangan dan Perawatan Internet</li>
    <li>Pembuatan Akun E-mail</li>
    <li>Pendaftaran Wi-Fi</li>
    <li>Penambahan Bandwidth</li>
    <li>Instalasi Perangkat Lunak</li>
    <li>Keamanan TI</li>
</ul>', 'Daftar perangkat lunak/infrastruktur
penunjang kegiatan operasional yang
terintegrasi secara parsial. ', 'Laporan manajemen risiko TI, evaluasi
isu TI beserta tindak lanjutnya. ', 'Laporan capaian kinerja yang berisi
hasil analisis tren kinerja TI dan Laporan audit sistem informasi/TI.', 'Rencana anggaran untuk
pengembangan dan implementasi IT
Masterplan atau portofolio layanan TI.', 'Daftar perangkat lunak/infrastruktur
penunjang kegiatan operasional yang
terintegrasi secara penuh.', 'Laporan hasil tindak lanjut, feedback
terkait tata kelola TI, misal hasil
temuan audit TI.', 'Rencana inovasi terkait peningkatan
layanan dan manajemen TI. ', 'Laporan pengelolaan relationship
management TI yang memuat hasil
analisis kebutuhan unit kerja atau
pihak ketiga atas layanan TI di masa
yang akan datang. ', 'Laporan analisis stakeholder feedback
terkait layanan TI.', 'Tidak ada work product, setidaknya
pengelolaan layanan publik dilakukan
dalam ruang lingkup yang terbatas
tanpa didukung perencanaan yang
memadai. ', 'Tidak ada work product, setidaknya isu
terkait layanan publik telah
diselesaikan namun tidak
terdokumentasikan dengan memadai.', 'Tidak ada work product, setidaknya
organisasi menyelesaikan keluhan
masyarakat secara manual atau sudah
dilakukan namun tanpa perencanaan
dan action plan yang tepat. ', 'Laporan kegiatan pengelolaan layanan
publik.', 'Logbook inventarisasi isu layanan
publik beserta rencana tindak lanjut
yang dituangkan dalam bentuk
dokumen/template resmi organisasi. ', 'Visi dan misi organisasi dalam
memberikan layanan publik kepada
masyarakat. ', 'Kebijakan dan/atau prosedur formal
terkait pengelolaan layanan publik
yang mencakup jenis layanan dan
standar layanan yang diberikan. ', 'Prosedur pengukuran efektivitas
layanan publik, revenue management,
dan KPI Layanan Publik.', 'Prosedur penanganan keluhan layanan
publik. ', 'Metode pengukuran efektivitas layanan
publik. ', 'Sistem yang digunakan untuk
menampung keluhan pengguna
layanan. ', 'Laporan kinerja layanan yang
mencakup efektivitas layanan dan
revenue management. ', 'Sistem yang digunakan untuk
menampung keluhan pengguna
layanan dan terintegrasi dengan
dashboard monitoring kinerja
organisasi.', 'Sistem monitoring Key Performance
Indicator pelayanan publik.', 'Rencana inovasi untuk meningkatkan
kualitas layanan publik yang dapat
mempertimbangkan kebutuhan
masyarakat dan tren terkini. ', 'Sistem yang digunakan untuk
menampung keluhan pengguna
layanan dan terintegrasi dengan modul
atau fungsi Customer Relationship
Management support. ', 'Sistem monitoring Key Performance
Indicator pelayanan publik dan
terintegrasi dengan sistem
pengendalian internal. ', 'Tidak ada work product, setidaknya
perencanaan strategis telah dilakukan
namun berdasarkan kebutuhan atau
permintaan tertentu.', 'Tidak ada work product, setidaknya
perencanaan strategis telah dilakukan
oleh unit/divisi tertentu namun belum
tertuang dalam dokumen resmi. ', 'Program kerja atau rencana strategis
di level Divisi atau Unit.', 'Laporan hasil analisis kebutuhan
stakeholder/ Laporan hasil analisis
kondisi strategis organisasi (misal
SWOT analysis)', 'Rencana Strategis Tahunan
(Rencana Strategis Bisnis/Rencana
Bisnis Anggaran) dan Rencana Strategis Organisasi untuk
perioder lima tahunan ', 'Rencana Strategis Organisasi Tahunan
yang setidaknya mencakup satu
inisiatif untuk seluruh unit. ', 'Kebijakan dan/atau prosedur formal
penyusunan perencanaan strategis
organisasi. ', 'Laporan tindak lanjut hasil analisis
kebutuhan stakeholder/ Laporan hasil
analisis kondisi strategis organisasi
(misal SWOT analysis) yang tertuang
dalam bentuk action plan. ', 'Laporan evaluasi dan monitoring
rencana strategis. ', 'Laporan Kinerja Organisasi yang
memuat hasil analisis pencapaian
target untuk memprediksi probabilitas
capaian target rencana strategis.', 'Key Performance Indeks (KPI)
Organisasi/Kontrak Kinerja Organisasi
yang diselaraskan dengan rencana
strategis organisasi. ', 'Rencana strategis organisasi yang
disusun berdasarkan laporan evaluasi
dan monitoring rencana strategis atau
bukti lain dengan substansi yang
relevan. ', 'Rencana strategis organisasi yang
disusun berdasarkan laporan evaluasi
KPI atau bukti lain dengan substansi
yang relevan.', 'Tidak ada work product, kode etik
belum ditetapkan atau terbatas dalam
bentuk informal', 'Tidak ada work product, setidaknya
kode etik telah diterapkan atau
berlaku dalam skala/lingkup yang kecil
seperti kelompok kerja atau divisi
tertentu.', 'Kode Etik yang telah dituangkan ke
dalam dokumen resmi namun terbatas
pada level divisi/unit. ', 'Bukti komunikasi kode etik, bisa dalam
bentuk undangan, minutes of meeting,
atau bentuk dokumentasi lainnya
dengan substansi yang sesuai. ', 'Kode Etik Organisasi yang telah
dituangkan ke dalam dokumen resmi
organisasi dan berlaku untuk seluruh
unit di organisasi.', 'Jadwal dan rencana sosialisasi
kode etik untuk pegawai baru dan Materi sosialisasi kode etik,
Laporan kegiatan sosialisasi kode
etik dan daftar hadir kegiatan
sosialisasi kode etik untuk pegawai
baru.', 'Jadwal dan rencana sosialisasi
kode etik untuk seluruh pegawai dan Materi sosialisasi kode etik,
Laporan kegiatan sosialisasi kode
etik dan daftar hadir kegiatan sosialisasi kode etik untuk seluruh
pegawai', 'Peraturan atau ketentuan terkait
reward and punishment kepatuhan
terhdap kode etik. ', 'Laporan Hasil Reviu dan Evaluasi atas
Penegakkan/Penerapan Kode Etik
Organisasi.', 'Laporan Hasil Reviu dan Evaluasi atas
Penegakkan/Penerapan Reward and
Punishment kepatuhan terhadap kode
etik.', 'Laporan Kegiatan Aktivitas
Perbaikan/Penyesuaian Kode Etik
dengan agenda membahas hasil Reviu
dan Evaluasi dari Dokumen Kode Etik
versi sebelumnya.', 'Laporan Kegiatan Aktivitas
Perbaikan/Penyesuaian Kode Etik
berdasarkan masukan dari stakeholder,
yang bisa berasal dari customer
survey, suara pelanggan, atau
dokumentasi lainnya dengan substansi
yang sesuai. ', 'Tidak ada work product. ', 'Tidak ada work product. ', 'Daftar Key Stakeholders internal dan
eksternal organisasi. ', 'Daftar Key Stakeholders internal dan
eksternal organisasi yang memuat
peran dan tanggung jawab dari
masing-masing stakeholder.', 'Key Stakeholders Mapping internal
maupun eksternal organisasi. ', 'Laporan analisis tindak lanjut isu-isu
terkait hubungan antar stakeholder. ', 'Kebijakan dan prosedur penanganan
isu dan terkait hubungan antar
stakeholder.', 'Sistem pendukung untuk mengelola
data dan informasi yang terkait
dengan pengelolaan stakeholder. ', 'Laporan Hasil Reviu dan Evaluasi
Terhadap Pengelolaan Stakeholder.', 'Laporan perbaikan pengelolaan
stakeholder yang disusun berdasarkan
hasil reviu dan evaluasi. ', 'Laporan perbaikan pengelolaan
stakeholder berdasarkan masukan dari
stakeholder, yang bisa berasal dari
customer survey, suara pelanggan,
atau dokumentasi lainnya dengan
substansi yang sesuai.', 'Tidak ada work product, setidaknya
manajemen risiko telah dilakukan
berdasarkan permintaan tertentu.', 'Tidak ada work product, setidaknya
manajemen risiko dilakukan
secara inkonsisten dan belum di
dokumentasikan secara resmi.', 'Tidak ada work product, setidaknya
manajemen risiko telah diterapkan
secara parsial pada unit/divisi
tertentu.', 'Laporan kegiatan manajemen risiko
yang telah dilakukan secara berkala.', 'Kebijakan dan prosedur penyusunan
dan tata cara identifikasi manajemen
risiko namun belum mencakup risiko
minimal. Risiko minimal mencakup: risiko
strategis, risiko operasional, risiko
finansial, risiko kebijakan dan
prosedur, dan risiko TI.', 'Laporan Kegiatan Manajemen Risiko
yang memuat dokumentasi
pelaksanaan aktivitas manajemen
risiko namun terbatas pada unit
tertentu. ', 'Jadwal dan rencana pelaksanaan
manajemen risiko dan Laporan kegiatan manajemen
risiko yang memuat aktivitas
manajemen risiko.', 'Kebijakan dan prosedur komprehensif
penyusunan dan tata cara identifikasi
manajemen risiko yang telah
mencakup risiko minimal.
Risiko minimal mencakup: risiko
strategis, risiko operasional, risiko
finansial, risiko kebijakan dan
prosedur, dan risiko TI.', 'Laporan Kegiatan Manajemen Risiko
yang memuat dokumentasi
pelaksanaan aktivitas manajemen
risiko berdasarkan kebijakan dan
prosedur manajemen risiko yang telah
ditetapkan dan mencakup seluruh unit
di organisasi. Dokumentasi bisa dalam
bentuk profil risiko.', 'Struktur Organisasi atau Fungsi
Manajemen Risiko.', 'Laporan Hasil Reviu dan Evaluasi
(Audit) Terhadap Pelaksanaan
Manajemen Risiko yang tertuang
dalam profil risiko. ', ' <ol>
    <li>Jadwal dan Rencana Pelatihan dan Penyuluhan Manajemen Risiko</li>
    <li>Laporan Kegiatan Pelatihan Manajemen Risiko dan Daftar Hadir</li>
    <li>Laporan Kegiatan Pelatihan dan Penyuluhan Manajemen Risiko yang memuat laporan aktivitas
    manajemen risiko</li>
</ol>', 'Laporan Pelaksanaan atau Hasil Tindak
Lanjut atas Hasil Reviu dan Evaluasi
(Audit) Manajemen Risiko.', 'Sistem pengelolaan manajemen risiko
berbasis real-time analytics. ', 'Rencana inovasi untuk meningkatkan
kualitas pengelolaan manajemen
risiko', 'Tidak ada work product, setidaknya
pengawasan dan pelaporan telah
dilakukan berdasarkan permintaan
tertentu.', 'Tidak ada work product, setidaknya
pengawasan dan pelaporan dilakukan
secara inkonsisten dan belum di
dokumentasikan secara resmi.', 'Tidak ada work product, setidaknya
pengawasan dan pelaporan telah
diterapkan dalam lingkup unit/divisi
tertentu.', 'Laporan kegiatan manajemen risiko
yang telah dilakukan secara berkala. ', 'Kebijakan dan prosedur pengawasan
dan pelaporan namun belum
mencakup pengawasan dan pelaporan
minimal.<br>
<strong>Pengawasan dan pelaporan minimal:</strong><br>
Pencapaian rencana strategis,
kegiatan proses bisnis/operasional,
finansial, kepatuhan, dan SI/TI.', 'Laporan Kegiatan Pengawasan dan
Pelaporan yang memuat dokumentasi
pelaksanaan aktivitas manajemen
risiko namun terbatas pada unit
tertentu.', 'Laporan Kegiatan Pengawasan dan
Pelaporan yang memuat laporan
aktivitas pengawasan dan pelaporan
yang sudah terjadwal.', 'Panduan Pelaksanaan
Pengawasan dan Pelaporan yang
setidaknya mencakup seluruh
aktivitas pengawasan dan
pelaporan minimal dan Tools/template/format pelaporan
yang mendukung untuk
menghasilkan output pekerjaan
yang konsisten.', 'Laporan Kegiatan Pengawasan dan
Pelaporan berdasarkan kebijakan dan
prosedur yang telah ditetapkan dan
mencakup seluruh unit di organisasi.', 'Bagan atau Struktur Organisasi Fungsi
Pengawasan dan Pelaporan.', 'Laporan Hasil Reviu dan Evaluasi
(Audit) Terhadap Pengawasan dan Pelaporan (Contoh: Laporan hasil reviu
kegiatan pengawasan yang dilakukan
Dewan Pengawas atau SPI)', '<ol>
    <li>Jadwal dan Rencana Pelatihan dan Penyuluhan pelaporan dan
    pengawasan
    </li>
    <li>Laporan kegiatan pelatihan
    pelaporan dan pengawasan dan
    daftar hadir</li>
    <li>Laporan kegiatan pelatihan dan
    penyuluhan pelaporan dan
    pengawasan yang memuat
    laporan aktivitas pelaporan dan
    pengawasan.
    </li>
</ol>', 'Laporan Pelaksanaan atau Hasil Tindak
Lanjut atas Hasil Reviu dan Evaluasi
(Audit) Pengawasan dan Pelaporan.', 'Sistem pengawasan dan pelaporan
berbasis real-time analytics. ', 'Rencana inovasi untuk meningkatkan
kualitas pengawasan dan pelaporan. ', 'Tidak ada work product. ', 'Tidak ada work product, setidaknya
organisasi telah melibatkan pengguna
layanan dalam proses inovasi
walaupun belum terdokumentasi
secara formal.', 'Survey pengguna layanan (internal
BLU) dengan tujuan khusus untuk
melakukan pengembangan inovasi
layanan BLU.', 'Tindak lanjut hasil survey pengguna
layanan terhadap inovasi layanan.', 'Laporan komprehensif hasil analisis
dan tindak lanjut survey pengguna
layanan terhadap inovasi layanan yang
disusun secara berkala. ', 'Kebijakan dan/atau prosedur terkait
proses inovasi yang menunjukkan
kewajiban untuk melibatkan pengguna
layanan dalam proses inovasi.', 'Strategi keterlibatan pengguna
dalam proses inovasi dan metode dan Rencana dan jadwal kegiatan
keterlibatan pengguna dalam
pengembangan inovasi.', 'Laporan berkala kegiatan keterlibatan
pengguna dalam pengembangan
inovasi. ', 'Proposal pengembangan inovasi
layanan yang menunjukkan pengguna
layanan sebagai co-designer.', 'Action plan matrix dalam rangka
merespon aspirasi yang diterima
dari pengguna layanan dan Notulensi rapat pembahasan
pengembangan inovasi', 'Desain pengumpulan dan pengolahan
data aspirasi pengguna layanan yang
dikembangkan dengan metode
statistik.', 'Laporan kegiatan pengembangan
inovasi yang mencakup:<br><ol>
        <li>Hasil uji coba (user acceptance)
        inovasi oleh pengguna layanan.</li>
        <li>Hasil keputusan go or no-go atas
        inovasi yang menunjukkan
        keterlibatan pengguna layanan.</li>
</ol>', 'Proposal kerjasama dengan pengguna
layanan sebagai co-designer dan coproducer inovasi layanan. ', 'Sistem terintergrasi untuk
pengumpulan, pengolahan data
aspirasi, dan uji coba pengguna
layanan atas hasil inovasi. ', 'Tidak ada work product. ', 'Tidak ada work product, setidaknya
organisasi telah melakukan proses
inovasi walaupun belum
terdokumentasi secara formal.', 'Notulensi proses perancangan inovasi. ', 'Notulensi proses pelaksanaan inovasi.', 'Kebijakan dan prosedur inovasi secara
lengkap yang mencakup proses
perencanaan, implementasi, evaluasi,
dan monitoring yang diberlakukan oleh
seluruh unit organisasi. ', 'Daftar program kerja inovasi
terintegrasi. ', 'Laporan hasil implementasi inovasi
yang disusun berdasarkan kebijakan
dan prosedur inovasi. ', 'Struktur Organisasi atau Fungsi
Manajemen Inovasi. ', 'Laporan pengukuran hasil
implementasi inovasi. ', 'KPI organisasi terkait pengukuran
aspek inovasi. ', 'Tindak lanjut laporan pengukuran hasil
implementasi inovasi yang dilakukan
secara kontinu. ', 'Sistem terintergrasi untuk mendukung
pelaksanaan proses inovasi, misal
collaboration tool berbasis internet. ', 'Tidak ada work product.', 'Tidak ada work product, setidaknya
manajemen pengetahuan telah
dilakukan berdasarkan permintaan
tertentu.', 'Tidak ada work product, setidaknya
personel (individu) telah melakukan
penyimpanan dan/atau dokumentasi
pengetahuan/informasi secara pribadi
atau belum terpusat. Misal, dalam
bentuk USB. ', 'Shared folder atau media lainnya berisi
kumpulan pengetahuan yang dapat
digunakan sebagai referensi seluruh
personel dalam melakukan penugasan
rutin. ', 'Kegiatan sharing session (berbagi
pengetahuan) informal. ', 'Inisiatif strategis organisasi terkait
program pemeliharaan manajemen
pengetahuan secara berkala. ', 'E-library, learning center, knowledge
management, newsletter email, yang berisi informasi/pengetahuan yang
dapat diakses oleh seluruh pegawai', 'Prosedur pengelolaan manajemen
pengetahuan yang mengatur:<br><ul>
<li>Klasifikasi jenis informasi dan
penilaian terhdap konten</li>
<li>Distribusi informasi pada
organisasi</li>
</ul>', 'Jadwal dan rencana pelatihan
untuk pengetahuan atau informasi
yang bersifat mandatory dan Laporan capaian pelaksanaan
pelatihan wajib terkait
pengetahuan atas informasi yang
bersifat mandatory.
', 'Laporan evaluasi pengelolaan
manajemen pengetahuan yang
mengukur participant rate atas
manajemen pengetahuan yang
dikelola. ', 'Laporan evaluasi atas pemanfaatan
infrastruktur manajemen
pengetahuan.', 'Tindak lanjut laporan pengukuran
pengelolaan manajemen pengetahuan
yang dilakukan secara kontinu.', 'Sistem informasi manajemen
pengetahuan terintegrasi dengan
sistem informasi sumber daya manusia
(HRIS). ', 'Tidak ada work product. ', 'Tidak ada work product, setidaknya
manajemen perubahan telah dilakukan
berdasarkan permintaan tertentu.', 'Tim manajemen perubahan (Change
Management) yang dibentuk secara
informal.', 'Notulensi yang berisi pembahasan
rencana manajemen perubahan.', 'Rencana komunikasi manajemen
perubahan dan pelatihan, namun
belum didefinisikan dalam bentuk alur
komunikasi formal.', 'Struktur resmi tim manajemen
perubahan (Change Management).', 'Prosedur formal terkait manajemen
perubahan yang mencakup tugas,
peran, tanggungjawab dan proses
manajemen perubahan.', '<ol>
<li>Jadwal dan rencana pelatihan tim
manajemen perubahan</li>
<li>Laporan capaian pelaksanaan
pelatihan tim manajemen
perubahan</li>
<li>Media komunikasi tim manajemen
perubahan.</li>
</ol>', 'Laporan Kegiatan Manajemen
Perubahan yang berisi pengukuran
keberhasilan perubahan, pengujian,
evaluasi, dan tindak lanjut/action plan
ke depannya.', 'Prosedur formal terkait
manajemen perubahan yang
mencakup tugas, peran,
tanggungjawab, proses, serta
metode pengukuran capaian
keberhasilan manajemen
perubahan dan Laporan capaian pengukuran
keberhasilan manajemen
perubahan.', 'Jadwal dan rencana pelatihan
manajemen perubahan untuk
seluruh pihak dan Laporan capaian pelaksanaan
pelatihan manajemen perubahan
untuk seluruh pihak', 'Sistem informasi manajemen
perubahan terintegrasi, yang
setidaknya menyajikan informasi
progress pelaksanaan dan capaian.', 'Tindak lanjut laporan pengukuran
keberhasilan manajemen perubahan
yang dilakukan secara kontinu. ', 'Tidak ada work product.', 'Tidak ada work product, setidaknya
organisasi pernah melaksanakan
kegiatan pengelolaan environmental
footprint walaupun belum
terdokumentasi secara formal', 'Tidak ada work product, setidaknya
organisasi telah melaksanakan
dokumentasi pengelolaan
environmental footprint secara
informal.', 'Dokumentasi yang mendefinisikan
environmental footprint yang belum
disusun berdasarkan standar baku', 'Laporan berkala kegiatan pengelolaan
environmental footprint.', 'Laporan identifikasi kebutuhan
pengelolaan environmental footprint', 'Laporan berkala kegiatan pengelolaan
environmental footprint yang
mencakup analisis isu lingkungan
terkini.', 'Kebijakan dan/atau prosedur formal
terkait standar baku pengelolaan
environmental footprint.', 'Laporan berkala kegiatan pengelolaan
environmental footprint yang disusun
berdasarkan standar baku. ', 'Laporan pengukuran dampak
pengelolaan environmental footprint
atas aktivitas BLU.', 'Prosedur pengukuran dampak
lingkungan dalam pengelolaan
environmental footprint yang disusun
berdasarkan framework atau standar
internasional. ', 'Laporan pengawasan atas hasil
pengelolaan environmental footprint.', 'Dokumen sertifikasi ISO 14001
organisasi.', 'Program kerja/action plan organisasi
dalam mengatasi isu lingkungan yang
teridentifikasi.', 'Rencana strategis organisasi yang
disusun berdasarkan laporan hasil
pengelolaan environmental footprint.', 'Tidak ada work product.', 'Tidak ada work product, setidaknya
organisasi pernah melaksanakan
kegiatan efisiensi penggunaan sumber
daya walaupun belum terdokumentasi
secara formal.', 'Tidak ada work product, setidaknya
organisasi telah melaksanakan
dokumentasi efisiensi penggunaan
sumber daya secara informal.', 'Dokumentasi yang mendefinisikan
penggunaan sumber daya yang belum
disusun berdasarkan standar baku.', 'Laporan berkala kegiatan efisiensi
penggunaan sumber daya.', 'Laporan identifikasi kebutuhan
efisiensi penggunaan sumber daya.', 'Laporan berkala kegiatan efisiensi
penggunaan sumber daya yang
mencakup analisis isu lingkungan
terkini.', 'Kebijakan dan/atau prosedur formal
terkait standar baku efisiensi
penggunaan sumber daya.', 'Laporan berkala kegiatan efisiensi
penggunaan sumber daya yang
disusun berdasarkan standar baku.', 'Metode pengukuran atas penggunaan
sumber daya yang menggunakan
standar atau referensi internasional.', 'Prosedur pengukuran dampak
lingkungan atas pengelolaan sumber
daya yang disusun berdasarkan
framework atau standar internasional.', 'Laporan pengawasan atas hasil
pengelolaan efisiensi penggunaan
sumber daya.', 'Dokumen sertifikasi ISO 14001
organisasi.', 'Program kerja/action plan organisasi
dalam mengelola sumber daya untuk mengatasi isu lingkungan yang
teridentifikasi.', 'Rencana strategis organisasi yang
disusun berdasarkan laporan hasil
pengelolaan efisiensi sumber daya.'
    ];

    $kriteria_indikator = [
        'Deviasi rasio optimalisasi kas ≥ 0.6 dari target', 'Deviasi rasio lancar ≥ 0.6 dari target', 'Tren penilaian indikator menurun dalam jangka 3 tahunan', 'Deviasi rasio optimalisasi kas 0.6 > x ≥ 0.2 dari target', 'Deviasi rasio lancar 0.4 > x ≥ 0.2 dari target', 'Tren penilaian indikator tetap dalam jangka 3 tahunan', 'Deviasi rasio optimalisasi kas 0.4 > x ≥ 0.2 dari target', 'Deviasi rasio lancar 0.4 > x ≥ 0.2 dari target', 'Tren penilaian indikator mengalami kenaikan dalam jangka 3 tahunan', 'Deviasi rasio optimalisasi kas ≥ < 0.2 dari target', 'Deviasi rasio lancar ≥ < 0.2 dari target', 'Tren penilaian indikator mengalami kenaikan signifikan dalam jangka 3
        tahunan', 'Rasio optimalisasi kas > 4%', 'Rasio lancar berada di antara 1.2 – 1.4', 'Tren penilaian indikator stabil di angka capaian target ideal dalam jangka 3
        tahunan', 'Deviasi POBO≥ 0.6 dari target', 'Tren penilaian indikator menurun dalam jangka 3 tahunan', 'Deviasi POBO 0.6 > x ≥ 0.4 dari target', 'Tren penilaian indikator tetap dalam jangka 3 tahunan', 'Deviasi POBO 0.4 > x ≥ 0.2 dari target', 'Tren penilaian indikator mengalami kenaikan dalam jangka 3 tahunan', 'Deviasi POBO < 0.2 dari target', 'Tren penilaian indikator mengalami kenaikan signifikan dalam jangka 3
        tahunan', 'POBO > 90%', 'Tren penilaian indikator stabil di angka capaian target ideal dalam jangka 3
        tahunan', 'Deviasi rasio imbalan atas asset ≥ 0.6 dari target', 'Deviasi imbalan atas ekuitas ≥ 0.6 dari target', 'Tren penilaian indikator menurun dalam jangka 3 tahunan', 'Deviasi rasio imbalan atas aset 0.6 > x ≥ 0.4 dari target', 'Deviasi imbalan atas ekuitas 0.6 > x ≥ 0.4 dari target', 'Tren penilaian indikator tetap dalam jangka 3 tahunan', 'Deviasi rasio imbalan atas aset 0.4 > x ≥ 0.2 dari target', 'Deviasi imbalan atas ekuitas 0.4 > x ≥ 0.2 dari target', 'Tren penilaian indikator mengalami kenaikan dalam jangka 3 tahunan', 'Deviasi rasio imbalan atas aset < 0.2 dari target', 'Deviasi imbalan atas ekuitas < 0.2 dari target', 'Tren penilaian indikator mengalami kenaikan signifikan dalam jangka 3
        tahunan', 'Rasio imbalan atas aset > 9%', 'Rasio imbalan atas ekuitas > 9%', 'Tren penilaian indikator stabil di angka capaian target ideal dalam jangka 3
        tahunan', 'Deviasi tingkat kemandirian ≥ 0.6 dari target', 'Tren penilaian indikator menurun dalam jangka 3 tahunan', 'Deviasi tingkat kemandirian 0.6 > x ≥ 0.4 dari target', 'Tren penilaian indikator tetap dalam jangka 3 tahunan', 'Deviasi tingkat kemandirian 0.4 > x ≥ 0.2 dari target', 'Tren penilaian indikator mengalami kenaikan dalam jangka 3 tahunan', 'Deviasi tingkat kemandirian< 0.2 dari target', 'Tren penilaian indikator mengalami kenaikan signifikan dalam jangka 3
        tahunan', 'Tingkat kemandirian berada di 85%', 'Tren penilaian indikator stabil di angka capaian target ideal dalam jangka 3
        tahunan', 'Deviasi indeks kepuasan masyarakat ≥ 0.6 dari target', 'Tren penilaian indikator menurun dalam jangka 3 tahunan', 'Deviasi indeks kepuasan masyarakat 0.6 > x ≥ 0.4 dari target', 'Tren penilaian indikator tetap dalam jangka 3 tahunan', 'Deviasi indeks kepuasan masyarakat 0.4 > x ≥ 0.2 dari target', 'Tren penilaian indikator mengalami kenaikan dalam jangka 3 tahunan', 'Deviasi indeks kepuasan masyarakat < 0.2 dari target', 'Tren penilaian indikator mengalami kenaikan signifikan dalam jangka 3
        tahunan', 'Indeks kepuasan masyarakat mencapai 100', 'Tren penilaian indikator stabil di angka capaian target ideal dalam jangka 3
        tahunan', 'Deviasi efisiensi waktu pelayanan ≥ 0.6 dari target', 'Tren penilaian indikator menurun dalam jangka 3 tahunan', 'Deviasi efisiensi waktu pelayanan 0.6 > x ≥ 0.4 dari target', 'Tren penilaian indikator tetap dalam jangka 3 tahunan', 'Deviasi efisiensi waktu pelayanan 0.4 > x ≥ 0.2 dari target', 'Tren penilaian indikator mengalami kenaikan dalam jangka 3 tahunan', 'Deviasi efisiensi waktu pelayanan < 0.2 dari target', 'Tren penilaian indikator mengalami kenaikan signifikan dalam jangka 3
        tahunan', 'Efisiensi waktu pelayanan mencapai 100', 'Tren penilaian indikator stabil di angka capaian target ideal dalam jangka 3
        tahunan', 'Belum ada media pelayanan pengaduan masyarakat', 'Tingkat pengaduan ditindaklanjuti < 20%', 'Penyelesaian pengaduan tepat waktu < 20%', 'Tren penilaian indikator menurun dalam jangka 3 tahunan', 'Terdapat media pelayanan pengaduan masyarakat', 'Tingkat pengaduan ditindaklanjuti 20% - < 40%', 'Penyelesaian pengaduan tepat waktu 20% - < 40%', 'Tren penilaian indikator tetap dalam jangka 3 tahunan', 'Terdapat media pelayanan pengaduan masyarakat', 'Tingkat pengaduan ditindaklanjuti 40% - < 70%', 'Penyelesaian pengaduan tepat waktu 40% - < 70%', 'Tren penilaian indikator mengalami kenaikan dalam jangka 3 tahunan', 'Terdapat media pelayanan pengaduan masyarakat', 'Tingkat pengaduan ditindaklanjuti 70% - < 90%', 'Penyelesaian pengaduan tepat waktu 70% - < 90%', 'Tren penilaian indikator mengalami kenaikan signifikan dalam jangka 3
        tahunan', 'Terdapat media pelayanan pengaduan masyarakat', 'Tingkat pengaduan ditindaklanjuti >= 90%', 'Penyelesaian pengaduan tepat waktu >= 90%', 'Tren penilaian indikator stabil di angka capaian target ideal dalam jangka 3
        tahunan', 'Deviasi tingkat keberhasilan pemenuhan layanan ≥ 0.6 dari target', 'Tren penilaian indikator menurun dalam jangka 3 tahunan', 'Deviasi tingkat keberhasilan pemenuhan layanan 0.6 > x ≥ 0.4 dari target', 'Tren penilaian indikator tetap dalam jangka 3 tahunan', 'Deviasi tingkat keberhasilan pemenuhan layanan 0.4 > x ≥ 0.2 dari target', 'Tren penilaian indikator mengalami kenaikan dalam jangka 3 tahunan', 'Deviasi tingkat keberhasilan pemenuhan layanan < 0.2 dari target', 'Tren penilaian indikator mengalami kenaikan signifikan dalam jangka 3
        tahunan', 'Tingkat keberhasilan pemenuhan layanan mencapai 100%', 'Tren penilaian indikator stabil di angka capaian target ideal dalam jangka 3
        tahunan', 'Organisasi setidaknya telah melakukan
        pengelolaan SDM secara ad-hoc dan
        bersifat administratif. ', 'Organisasi setidaknya telah
        mendefinisikan peran dan
        tanggungjawab SDM secara lisan atau
        informal.', 'Organisasi setidaknya telah
        memberikan pelatihan kepada SDM
        secara ad-hoc.', 'Proses rekruitmen SDM/tenaga kerja
        telah sesuai dengan kualifikasi yang
        dibutuhkan organisasi.', 'Organisasi setidaknya telah
        mendefinisikan peran dan
        tanggungjawab SDM dalam bentuk job
        description.', 'Organisasi setidaknya telah
        memberikan pelatihan kepada SDM
        secara rutin sesuai dengan kebutuhan
        organisasi.', 'Organisasi setidaknya telah
        menyediakan fasilitas dasar untuk
        mendukung kegiatan operasional dayto-day SDM (seperti: email, dan
        sebagainya).', 'Organisasi setidaknya telah melakukan
        penyesuaian kompensasi SDM sesuai
        dengan target atau capaian kinerja.', 'Organisasi setidaknya telah
        mendefinisikan analisis kapabilitas
        SDM untuk mengukur beban kerja,
        kompetensi, dan pengetahuan SDM
        dalam prosedur baku.', 'Organisasi telah melakukan
        pengembangan kompetensi SDM
        secara konsisten melalui program
        pengembangan karir.', 'Organisasi telah menerapkan
        workgroup development yang
        setidaknya mencakup penyediaan
        program kerja untuk mendorong
        penugasan lintas unit.', 'Organisasi telah menanamkan budaya
        partisipatoris setidaknya dengan
        melibatkan tenaga kerja dalam proses
        pengambilan keputusan organisasi.', 'Seluruh SDM organisasi telah mampu
        berkolaborasi secara lintas unit
        meskipun memiliki job description
        yang berbeda.', 'Organisasi telah melakukan analisis
        kinerja SDM untuk memprediksi tren
        output masing-masing pegawai.', 'Organisasi telah menerapkan program
        mentoring SDM yang setidaknya dalam
        bentuk transfer knowledge maupun
        sharing session secara individu
        maupun kelompok.', 'Organisasi selalu memberikan
        dukungan kepada SDM untuk
        melaksanakan penugasan berbasis
        inovasi.', 'Organisasi telah melakukan identifikasi
        dan evaluasi peluang inovasi yang
        dibutuhkan dalam rangka mendorong
        pertumbuhan organisasi.', 'Organisasi memiliki kelompok kerja
        khusus yang bertugas untuk
        melakukan penelitian atas kebutuhan
        human resource sustainability dalam
        jangka panjang.', 'Proses bisnis pada organisasi
        setidaknya telah dikelola secara ad
        hoc. ', 'Panduan dalam melaksanakan proses
        bisnis dan peningkatan kualitas layanan setidaknya dilakukan secara
        informal.', 'Organisasi setidaknya memiliki arahan
        dari manajemen eksekutif, rencana
        strategis, serta ketersediaan anggaran
        untuk menunjang kegiatan
        operasional.', 'Organisasi setidaknya telah mengelola
        layanan dan produk dari pihak ketiga
        untuk memenuhi kebutuhan internal
        maupun eksternal organisasi. ', 'Seluruh proses bisnis organisasi telah
        didefinisikan dalam prosedur baku
        yang dilengkapi dengan tujuan, input,
        proses, output, dan process owner.', 'Organisasi setidaknya mampu
        mengelola barang dan jasa yang
        diberikan kepada publik. Pada level ini,
        organisasi dapat mengelola
        infrastruktur, persediaan, dan sumber
        daya lainnya untuk memastikan
        layanan yang diberikan kepada
        masyarakat berkualitas baik.', 'Organisasi setidaknya mampu
        memprediksi output yang dihasilkan
        untuk selanjutnya digunakan sebagai
        basis dalam meningkatkan kinerja,
        kualitas layanan, cycle time, serta
        memprediksi pendapatan organisasi.', 'Organisasi setidaknya memiliki
        manajemen database, baseline, dan
        analisis tren output organisasi.', 'Organisasi setidaknya
        mengintegrasikan dan meningkatkan
        efektivitas serta efisiensi proses bisnis
        melalui kolaborasi lintas unit.', 'Organisasi telah mengidentifikasi isu
        atau potensi risiko penurunan kinerja
        yang dapat diukur secara kuantitatif.', 'Organisasi setidaknya memiliki
        improvement dan sustainability
        planning dalam meningkatkan kinerja
        organisasi secara keseluruhan dalam
        jangka panjang.', 'Organisasi telah melakukan analisis
        terhadap stakeholder feedback untuk
        mengidentifikasi potensi perbaikan
        kinerja layanan proses bisnis
        organisasi', 'Organisasi setidaknya telah melakukan
        manajemen layanan TI secara ad-hoc.', 'Organisasi setidaknya memiliki satu
        proses/aktivitas operasional day-to-day
        yang didukung oleh sistem.', 'Organisasi setidaknya telah melakukan
        identifikasi isu TI dan penyelesaiannya
        secara informal.', 'Organisasi setidaknya memiliki tata
        kelola TI untuk mendukung technical
        focus.', 'Organisasi setidaknya telah melakukan
        manajemen layanan TI secara rutin, di
        mana organisasi telah memiliki visi dan
        misi dalam mengelola TI.', 'Organisasi setidaknya memiliki
        beberapa/sebagian proses/aktivitas
        operasional day-to-day yang didukung
        oleh sistem.', 'Organisasi setidaknya telah
        mengidentifikasi proses bisnis yang
        membutuhkan dukungan TI.', 'Sebagian tata kelola TI setidaknya
        telah dipusatkan pada
        customer/service focus.', 'Seluruh proses bisnis yang berkaitan
        dengan tata kelola TI telah
        didefinisikan dalam prosedur baku
        yang dilengkapi dengan tujuan, input,
        proses, output, dan process owner.', 'Sebagian day-to-day aktivitas
        operasional yang berhubungan dengan
        TI dikelola menggunakan sistem yang
        terotomatisasi.', 'Tata kelola TI telah bersifat proaktif, di
        mana organisasi mampu
        mengidentifikasi risiko TI, melakukan
        investigasi serta recovery plan atas isu
        TI.', 'Seluruh proses bisnis yang berkaitan
        dengan tata kelola TI mampu
        menghasilkan output yang bersifat
        standar. Organisasi mampu
        mengidentifikasi risiko TI secara cepat
        dan melakukan audit TI secara berkala.', 'Organisasi memiliki dana investasi TI
        untuk memastikan kinerja dapat
        dikelola secara optimal dan kualitas
        layanan TI terus meningkat.', 'Day-to-day aktivitas operasional telah
        terintegrasi secara penuh melalui
        automation tools.', 'Organisasi telah menindaklanjuti
        feedback terkait tata kelola TI
        berdasarkan hasil audit kinerja TI.', 'Organisasi secara aktif
        mengidentifikasi peluang inovasi
        dalam manajemen TI untuk
        mendukung continuous improvement.', 'Service Governance TI organisasi telah
        mencakup pengelolaan atas
        relationship management pengguna TI
        antar unit kerja maupun dengan pihak
        ketiga.', 'Organisasi telah melakukan analisis
        terhadap stakeholder feedback untuk
        mengidentifikasi potensi perbaikan
        kinerja layanan TI.', 'Organisasi setidaknya telah melakukan
        proses pengelolaan layanan publik
        secara ad-hoc.', 'Organisasi setidaknya telah melakukan
        inventarisasi isu atau keluhan layanan
        publik secara informal.', 'Organisasi setidaknya telah merespon
        keluhan masyarakat secara manual.', 'Organisasi setidaknya telah melakukan
        proses pengelolaan layanan publik
        secara rutin.', 'Organisasi setidaknya telah melakukan
        inventarisasi isu atau keluhan layanan
        publik secara formal, di mana terdapat
        kebijakan dalam menanggulangi
        service recovery, keluhan, dan
        feedback dari masyarakat.', 'Organisasi setidaknya telah
        mendefinisikan visi dan misi
        penyediaan layanan publik kepada
        masyarakat.', 'Organisasi setidaknya telah
        mendefinisikan seluruh proses
        pengelolaan layanan publik dalam
        bentuk prosedur standar.', 'Organisasi setidaknya memiliki
        prosedur baku dan metode dalam
        mengukur efektivitas layanan publik, revenue management, dan KPI
        Layanan.', 'Organisasi setidaknya memiliki
        prosedur baku dalam menanggulangi
        service recovery, keluhan dan
        feedback dari masyarakat.', 'Organisasi setidaknya memiliki metode
        dalam pengukuran efektivitas layanan
        publik meskipun belum
        terstandardisasi.', ' Organisasi setidaknya memiliki
        sistem/aplikasi/ERP dalam merespon
        keluhan masyarakat, meskipun belum
        terintegrasi secara penuh dengan
        dashboard monitoring kinerja
        organisasi.', 'Organisasi setidaknya melakukan
        analisis tren dan output yang
        dihasilkan dalam memberikan layanan
        publik berdasarkan efektivitas layanan
        maupun revenue management.', 'Organisasi setidaknya memiliki
        sistem/aplikasi/ERP dalam merespon
        keluhan masyarakat yang terintegrasi
        dengan dashboard monitoring kinerja
        organisasi secara keseluruhan.', 'Organisasi setidaknya memiliki
        sistem/aplikasi/ERP untuk memantau
        Key Performance Indicator pelayanan
        publik.', 'Organisasi setidaknya menanamkan
        budaya inovasi untuk memastikan
        layanan publik yang diberikan kepada
        masyarakat sesuai dengan tren terkini.', 'Organisasi mengembangkan
        sistem/aplikasi/ERP sesuai tren terkini
        dalam merespon keluhan masyarakat
        yang terintegrasi dengan
        ERP/Customer Relationship
        Management support. ', 'Organisasi telah memiliki
        sistem/aplikasi/ERP untuk memantau
        Key Performance Indicator pelayanan
        publik yang terintegrasi dengan sistem
        pengendalian internal.', 'Penyusunan rencana strategis
        setidaknya telah dilakukan secara adhoc.', 'Penyusunan rencana strategis
        setidaknya telah dilakukan oleh
        unit/divisi tertentu secara informal.', ' Penyusunan rencana strategis
        setidaknya telah dilakukan secara
        rutin oleh unit tertentu (misal: Unit TI
        telah menyusun Rencana Strategis
        TI/IT Master Plan).', 'Kebutuhan setiap stakeholder baik
        internal maupun eksternal yang terkait
        dengan perencanaan strategis
        setidaknya sudah diidentifikasi dan
        dianalisis.', 'Rencana strategis setidaknya telah
        dikembangkan secara berkala dan
        terjadwal, baik untuk periode tahunan
        maupun lima tahunan.', 'Penyusunan rencana strategis
        setidaknya telah dilakukan secara
        rutin dalam lingkup organisasi, dalam
        hal ini di dalam organisasi terdapat 1
        (satu) rencana strategis yang berlaku
        untuk seluruh bagian di dalam
        organisasi.', 'Terdapat panduan formal proses
        penyusunan rencana strategis yang
        bersifat baku dan terstandardisasi,
        dilengkapi dengan Petunjuk
        Pelaksanaan yang terstruktur dan
        sistematis, serta telah ditetapkan
        sebagai dokumen resmi organisasi
        yang berlaku secara menyeluruh
        (ditetapkan sebagai kebijakan).', 'Kebutuhan stakeholder yang
        sebelumnya sudah diidentifikasi dan
        dianalisis dipertimbangkan dalam
        menyusun Rencana Strategis.', 'Organisasi setidaknya telah
        melaksanakan reviu dan evaluasi
        untuk memastikan bahwa Rencana
        Strategis sudah dilaksanakan sesuai
        dengan rencana (action plan atau
        roadmap) yang ditetapkan.', 'Organisasi setidaknya telah
        melaksanakan analisis pencapaian
        target untuk memprediksi probabilitas
        ketercapaian dari Rencana Strategis
        secara menyeluruh.', 'Rencana strategis diterjemahkan ke
        dalam bentuk KPI yang harus dicapai
        oleh organisasi dan/atau unit/divisi, di
        mana organisasi juga telah melakukan
        reviu dan evaluasi atas ketercapaian
        KPI tersebut.', 'Data dan informasi yang diperoleh dari
        aktivitas reviu dan evaluasi, serta
        analisis pencapaian target atas
        Rencana Strategis setidaknya
        digunakan sebagai umpan balik atau
        referensi untuk penyusunan Rencana
        Strategis periode berikutnya.', 'Hasil reviu dan evaluasi atas
        ketercapaian KPI digunakan sebagai
        umpan balik (feedback) atau referensi
        dalam penyusunan Rencana Strategis
        periode berikutnya.', 'Kode etik organisasi (spesifik untuk
        internal organisasi) setidaknya telah
        ditetapkan secara lisan atau informal.', 'Kode etik organisasi setidaknya sudah
        diterapkan atau berlaku dalam
        skala/lingkup yang kecil seperti
        kelompok kerja atau divisi tertentu.', 'Kode etik organisasi setidaknya telah
        disusun dan ditetapkan secara formal
        untuk kelompok kerja atau divisi
        tertentu.', 'Kode etik organisasi setidaknya sudah
        dikomunikasikan secara ad-hoc,
        berdasarkan permintaan dari pihak
        manajemen.', 'Kode etik organisasi telah disusun dan
        ditetapkan secara formal dalam
        kebijakan baku/standar yang berlaku
        di lingkungan organisasi secara
        keseluruhan.', 'Kode etik organisasi setidaknya sudah
        dikomunikasikan secara rutin dalam
        setiap kegiatan induction/on-boarding
        kepada pegawai baru.', 'Kode etik organisasi setidaknya sudah
        dikomunikasikan secara rutin kepada
        seluruh pegawai minimal satu kali
        dalam setahun, sehingga tidak ada kesenjangan pemahaman antara
        pegawai lama dan pegawai baru.', 'Peraturan atau ketentuan reward and
        punishment untuk setiap pelanggaran
        atau kepatuhan atas kode etik
        organisasi setidaknya telah ditetapkan
        secara formal.', 'Organisasi setidaknya telah
        melaksanakan reviu dan evaluasi
        untuk memastikan kode etik organisasi
        sudah ditegakkan/diterapkan di
        seluruh organisasi.', 'Organisasi setidaknya telah
        memastikan bahwa sistem reward and
        punishment dari setiap pelanggaran
        atau kepatuhan terhadap kode etik
        organisasi telah diterapkan
        /diberlakukan dengan tegas di seluruh
        organisasi.', 'Hasil reviu dan evaluasi digunakan
        sebagai umpan balik (feedback) atau
        referensi perbaikan atau penyesuaian
        kode etik organisasi periode
        berikutnya.', 'Organisasi selalu mempertimbangkan
        masukan dari setiap stakeholder dalam
        melakukan perbaikan/penyesuaian
        kode etik organisasi.', 'Organisasi setidaknya telah menyadari
        pentingnya mengelola hubungan
        antar-stakeholder dengan baik, demi
        mendukung kegiatan operasionalnya
        sehari-hari.', 'Organisasi setidaknya telah menyadari
        bahwa terdapat isu dan concern yang
        bersifat antar-stakeholder yang
        memerlukan kolaborasi untuk
        penyelesaiannya, meskipun saat ini
        belum terdapat tindak lanjut untuk
        mengelola hubungan antarstakeholder tersebut.', 'Organisasi setidaknya telah
        mengidentifikasi key stakeholders
        internal dan eksternal yang dalam hal
        ini disesuaikan dengan nature dan
        proses bisnis setiap organisasi.', 'Organisasi setidaknya telah
        mendefinisikan peran dan tanggung
        jawab dari masing-masing stakeholder.', 'Organisasi setidaknya telah melakukan
        pemetaan (mapping) hubungan antarstakeholders.', 'Organisasi setidaknya telah
        mengidentifikasi dan menganalisis
        tindak lanjut atas isu dan concern yang
        bersifat antar-stakeholder.', 'Terdapat panduan penanganan isu dan
        concern yang bersifat antarstakeholder dengan mengacu pada
        leading practice.', 'Data dan informasi yang bersifat
        antar-stakeholder telah dikelola secara
        terpusat, sehingga mendukung proses
        pengambilan keputusan terhadap
        suatu isu menjadi lebih cepat, efektif,
        dan efisien.', 'Organisasi telah melaksanakan reviu
        dan evaluasi secara berkala terhadap
        stakeholder’s relationship untuk
        memastikan berbagai hal seperti
        daftar key stakeholders, peran dan tanggung jawab, pemetaan hubungan
        antar key stakeholders, isu dan
        concern beserta dokumen panduannya
        selalu up to date.', ' Hasil reviu dan evaluasi terhadap
        pengelolaan stakeholder’s relationship
        setidaknya telah digunakan untuk
        melihat relevansi terhadap proses
        bisnis organisasi terkini.', 'Organisasi mempertimbangkan
        masukan dari setiap stakeholder dalam
        melakukan perbaikan/penyesuaian
        proses bisnis organisasi (layanan
        organisasi).', 'Manajemen risiko setidaknya telah
        dilakukan secara ad-hoc dan/atau jika
        terdapat kebutuhan.', 'Organisasi telah menghasilkan output
        pekerjaan dari aktivitas manajemen
        risiko, yang setidaknya bersifat
        informal.', 'Manajemen risiko setidaknya sudah
        diterapkan atau berlaku dalam
        skala/lingkup yang kecil seperti
        kelompok kerja atau divisi tertentu.', 'Manajemen risiko setidaknya telah
        dilakukan secara rutin (berulang)', 'Terdapat panduan manajemen risiko
        yang setidaknya mencakup beberapa
        risiko (namun belum mencakup
        seluruh risiko minimal), sehingga
        dapat mendukung organisasi untuk menghasilkan output pekerjaan yang
        konsisten.', 'Pelaksanaan aktivitas manajemen
        risiko setidaknya sudah berdasarkan
        panduan yang tersedia.', 'Manajemen risiko setidaknya telah
        dilakukan secara berkala dan
        terjadwal.', 'Terdapat panduan manajemen risiko
        baku dan standar dengan mengacu
        pada leading practice, yang setidaknya
        mencakup seluruh risiko minimal,
        sehingga dapat mendukung organisasi
        untuk menghasilkan output pekerjaan
        yang konsisten.', 'Manajemen risiko sudah diterapkan
        atau dilaksanakan di seluruh
        organisasi secara konsisten sesuai
        dengan panduan yang telah
        ditetapkan.', 'Organisasi setidaknya telah
        menetapkan struktur/unit/fungsi
        khusus yang bertugas untuk
        mengelola aktivitas manajemen risiko
        secara terpusat di dalam organisasi.', ' Struktur/unit/fungsi khusus yang
        bertugas untuk mengelola aktivitas
        manajemen risiko di dalam organisasi
        setidaknya telah melakukan reviu dan
        evaluasi (audit) berkala terhadap
        pelaksanaan manajemen risiko untuk
        memastikan bahwa penanganan risiko
        telah dilakukan dengan tepat waktu
        oleh risk-owner dan sesuai dengan
        panduan yang telah ditetapkan.', 'Terdapat pelatihan dan penyuluhan
        secara berkala untuk seluruh pegawai
        organisasi dalam rangka membangun
        kesadaran (awareness) mengenai
        risiko organisasi.', 'Hasil reviu dan evaluasi (audit)
        terhadap pelaksanaan manajemen
        risiko telah ditindaklanjuti sesuai
        dengan rekomendasi perbaikan yang
        telah didefinisikan.', 'Penggunaan SI/TI yang terpadu, yang
        mendukung real-time risk analytics.', 'Organisasi secara konsisten telah
        berupaya untuk berinovasi dalam
        praktik manajemen risiko.', 'Aktivitas pengawasan dan pelaporan
        setidaknya telah dilakukan secara adhoc dan/atau jika terdapat kebutuhan.', ' Organisasi telah menghasilkan output
        pekerjaan dari aktivitas pengawasan
        dan pelaporan, yang setidaknya
        bersifat informal.', 'Aktivitas pengawasan dan pelaporan
        setidaknya sudah diterapkan atau
        berlaku dalam skala/lingkup yang kecil
        seperti kelompok kerja atau divisi
        tertentu.', 'Aktivitas pengawasan dan pelaporan
        setidaknya telah dilakukan secara
        rutin (berulang).', 'Terdapat panduan yang setidaknya
        mencakup beberapa aktivitas
        pengawasan dan pelaporan (namun
        belum mencakup lingkup aktivitas
        minimal), sehingga dapat mendukung
        organisasi untuk menghasilkan output
        pekerjaan yang konsisten.', 'Pelaksanaan aktivitas pengawasan dan
        pelaporan setidaknya sudah
        berdasarkan panduan yang tersedia.', 'Aktivitas pengawasan dan pelaporan
        setidaknya telah dilakukan secara
        berkala dan terjadwal.', 'Terdapat panduan pengawasan dan
        pelaporan baku dan standar dengan
        mengacu pada leading practice, yang
        setidaknya mencakup seluruh aktivitas
        pengawasan dan pelaporan minimal,
        sehingga dapat mendukung organisasi
        untuk menghasilkan output pekerjaan
        yang konsisten. Dalam hal ini,
        termasuk tool/template/format
        pelaporan untuk dapat menghasilkan
        output pekerjaan yang konsisten.', 'Pengawasan dan pelaporan sudah
        diterapkan atau dilaksanakan di
        seluruh organisasi secara konsisten
        sesuai dengan panduan yang telah
        ditetapkan.', 'Organisasi setidaknya telah
        menetapkan struktur/unit/fungsi
        khusus yang bertugas untuk
        melakukan aktivitas pengawasan dan
        pelaporan secara terpusat di dalam
        organisasi, seperti memeriksa
        pemenuhan pelaporan (laporan
        disampaikan tepat waktu dan isinya
        sesuai dengan yang ketentuan),
        pemeriksaan kredibilitas dari laporan,
        melakukan tinjauan lapangan untuk
        memverifikasi kebenaran dari isi
        laporan yang disajikan.', 'Struktur/unit/fungsi khusus yang
        bertugas untuk mengelola aktivitas pengawasan dan pelaporan di dalam
        organisasi setidaknya telah melakukan
        reviu dan evaluasi (audit) berkala
        terhadap pelaksanaan pengawasan
        dan pelaporan untuk memastikan
        bahwa aktivitas sesuai dengan
        panduan yang telah ditetapkan.', 'Terdapat pelatihan dan penyuluhan
        secara berkala terkait aktivitas
        pengawasan dan pelaporan untuk
        membangun awareness mengenai
        pentingnya pelaksanakan pengawasan
        dan pelaporan, serta untuk
        memastikan setiap pihak memahami
        proses dan prosedur pengawasan dan
        pelaporan dengan baik.', 'Hasil reviu dan evaluasi terhadap
        pelaksanaan pengawasan dan
        pelaporan (audit) setidaknya telah
        ditindaklanjuti sesuai dengan
        rekomendasi perbaikan yang telah
        didefinisikan.', 'Penggunaan SI/TI yang terpadu, yang
        mendukung aktivitas pengawasan dan
        pelaporan, serta dapat mendukung
        penyediaan informasi bottom-up dan
        top-down secara real-time dan akurat.', 'Organisasi secara konsisten berupaya
        untuk berinovasi dalam praktik
        pengawasan dan pelaporan.', 'Organisasi setidaknya telah memiliki
        kesadaran terkait pentingnya
        keterlibatan pengguna layanan dalam
        melakukan pengembangan inovasi
        layanan organisasi.', 'Organisasi setidaknya telah
        melibatkan pengguna layanan dalam
        melakukan proses inovasi secara adhoc dan informal.', 'Organisasi setidaknya telah melibatkan
        pengguna layanan (internal BLU)
        secara rutin dan informal, di mana
        pengguna layanan (internal BLU) berperan aktif dalam memberikan
        pendapat dan aspirasi dalam
        pengembangan inovasi layanan.', 'Organisasi setidaknya telah
        melibatkan pengguna layanan (internal
        BLU) dalam menyusun persyaratan
        dalam pengembangan proses inovasi.', 'Organisasi setidaknya telah melibatkan
        pengguna layanan (internal dan
        eksternal BLU) secara rutin dan
        formal, di mana pengguna layanan
        (internal dan eksternal BLU)
        dikonsultasikan pada beberapa
        tahapan pengembangan inovasi untuk
        menyampaikan keinginan, persyaratan,
        dan ide.', 'Organisasi setidaknya telah
        mendefinisikan standar baku dan
        prosedur formal dalam melakukan
        proses inovasi yang memperlihatkan
        keterlibatan pengguna layanan dalam
        proses inovasi.', ' Organisasi setidaknya telah menyusun
        strategi keterlibatan pengguna
        layanan dalam pengembangan inovasi
        (contoh: jadwal keterlibatan pengguna
        layanan, metode user involvement,
        dan sebagainya).', 'Keterlibatan pengguna layanan dalam
        proses pengembangan inovasi sudah
        diterapkan secara konsisten sesuai
        dengan panduan yang telah
        ditetapkan.', 'Organisasi setidaknya telah melibatkan
        pengguna layanan (internal dan
        eksternal BLU) secara rutin dan
        formal, di mana pengguna layanan
        (internal dan eksternal BLU) terlibat
        pada setiap tahapan pengembangan
        inovasi dan berperan sebagai codesigner yang berpengaruh dalam
        pengembangan inovasi.', 'Terdapat action plan yang setidaknya
        jelas dan terarah dalam merespon
        aspirasi yang diterima dari pengguna
        layanan.', 'Organisasi telah menyusun strategi
        keterlibatan pengguna layanan
        setidaknya dengan pendekatan
        statistik atau riset yang didesain untuk
        mendapatkan aspirasi dan pendapat yang konkrit dalam pengembangan
        inovasi.', 'Pengguna layanan berperan aktif
        dalam end-to-end process
        pengembangan inovasi layanan. Dalam
        hal ini, pengguna layanan turut
        berperan dalam pembuatan keputusan
        inovasi (go or no-go atas inovasi suatu
        produk/layanan).', 'Terdapat partisipasi dan interaksi
        dengan pengguna layanan yang
        konstan melalui kerja sama untuk
        menjadi co-designer dan co-producer
        dalam melakukan continuous
        improvement.', 'Organisasi memiliki tools pendukung
        yang mampu mendukung pelaksanaan
        keterlibatan pengguna layanan (user
        involvement) dalam pelaksanaan
        proses inovasi.', 'Organisasi setidaknya telah memiliki
        kesadaran terkait pentingnya proses
        inovasi dalam mendukung kegiatan
        operasional dan kelangsungan bisnis
        organisasi.', 'Organisasi setidaknya telah melakukan
        proses inovasi secara ad-hoc dan/atau
        berdasarkan permintaan dari pihak
        manajemen.', 'Organisasi setidaknya telah melakukan
        proses perancangan inovasi secara
        rutin/berulang dan informal.', ' Organisasi setidaknya telah melakukan
        proses pembuatan inovasi secara rutin
        dan informal.', 'Organisasi setidaknya telah
        mendefinisikan standar baku dan
        prosedur formal dalam melakukan
        proses inovasi.', 'Proses inovasi dilakukan secara
        terintegrasi dan saling mendukung,
        tidak overlapping atau tumpang tindih.', 'Proses inovasi sudah diterapkan atau
        dilaksanakan di seluruh organisasi
        secara konsisten sesuai dengan
        panduan yang telah ditetapkan.', 'Organisasi setidaknya telah
        menetapkan struktur/unit/fungsi
        pengawas yang bertugas untuk
        mengevaluasi dan mengawasi proses
        inovasi secara terpusat di organisasi.
        Dalam hal ini, struktur/unit/fungsi
        pengawas setidaknya telah melakukan
        reviu dan evaluasi berkala terhadap
        pelaksanaan proses inovasi untuk
        memastikan bahwa proses inovasi
        sesuai dengan standar baku dan
        prosedur yang telah ditetapkan.', 'Terdapat pengukuran hasil inovasi
        yang telah diimplementasikan secara
        berkala, termasuk pengukuran atas
        ketercapaian/keberhasilan inovasi,
        dampak inovasi, dan sebagainya.', 'Proses inovasi dijadikan sebagai Key
        Performance Indicator (KPI) pada
        unit/bagian di organisasi.', 'Hasil evaluasi atas pelaksanaan proses
        inovasi digunakan sebagai dasar untuk
        melakukan proses inovasi berikutnya,
        sehingga tercipta continuous
        improvement', 'Organisasi memiliki innovation tools
        yang mampu mendukung pelaksanaan
        proses inovasi, di mana tools ini dapat
        digunakan oleh seluruh
        unit/tim/individu di organisasi.', 'Organisasi setidaknya telah memiliki
        kesadaran terkait pentingnya
        pengelolaan sumber daya
        pengetahuan dalam mendukung
        kegiatan operasional dan inovasi.', 'Organisasi setidaknya telah melakukan
        pengelolaan sumber daya
        pengetahuan secara ad-hoc dan/atau
        jika terdapat permintaan dari pihak
        manajemen.', 'Personel (individu) organisasi
        setidaknya telah melakukan
        penyimpanan dan/atau dokumentasi
        pengetahuan/informasi yang dimiliki
        pribadi secara ad-hoc.', 'Organisasi setidaknya telah melakukan
        pengelolaan sumber daya
        pengetahuan secara rutin, di mana
        pengetahuan yang diperlukan untuk
        melakukan tugas rutin telah
        didokumentasikan.', 'Personel (individu) organisasi
        setidaknya telah melakukan pertukaran
        informasi/pengetahuan secara
        informal.', 'Organisasi menganggap sumber daya
        pengetahuan sebagai informasi yang
        ditempatkan dalam konteks tujuan
        organisasi, pengetahuan dipelihara
        (maintained) sehingga tetap relevan.', 'Organisasi setidaknya telah memiliki
        infrastruktur dasar untuk mendukung pengelolaan sumber daya
        pengetahuan.', 'Organisasi setidaknya telah
        mendefinisikan standar baku dan
        prosedur formal dalam melakukan
        manajemen pengetahuan.', 'Terdapat pelatihan secara berkala
        untuk pengetahuan/informasi yang
        bersifat mandatory dalam rangka
        memastikan seluruh pegawai memiliki
        pengetahuan terkini dan sesuai
        dengan tugas dan fungsinya.', 'Terdapat aktivitas pengawasan
        dan/atau evaluasi kegiatan manajemen
        pengetahuan, serta pengukuran
        tingkat partisipan yang menggunakan
        informasi dan pengetahuan yang telah
        dikelola.', 'Terdapat aktivitas pengawasan
        dan/atau evaluasi terhadap
        infrastruktur dari sistem informasi
        manajemen pengetahuan.', 'Kegiatan pengumpulan, penyimpanan,
        dan berbagi pengetahuan pada
        organisasi ditinjau dan diperbaiki
        secara berkelanjutan, kelemahan dari
        proses ini dapat dengan mudah
        diidentifikasi dan diperbaiki.', 'Infrastruktur sistem informasi yang
        digunakan untuk manajemen
        pengetahuan terus ditingkatkan.
        Dalam hal ini, sistem manajemen
        pengetahuan terintegrasi dengan
        sistem informasi sumber daya manusia
        (HRIS), sehingga dapat memantau
        perkembangan pengetahuan dari
        setiap individu.', 'Keberhasilan proses perubahan
        setidaknya bergantung pada upaya
        dan pengalaman individu tertentu', 'Proses manajemen perubahan
        setidaknya telah dilakukan secara adhoc.', 'Keberhasilan proses perubahan
        setidaknya bergantung pada upaya dan
        pengalaman unit/tim tertentu, di mana
        struktur tim manajemen perubahan ini
        setidaknya sudah dibentuk secara
        informal atau penugasan lisan.', 'Proses manajemen perubahan
        setidaknya telah dilakukan secara
        rutin dan informal.', 'Unsur-unsur perencanaan komunikasi
        jelas, dan setidaknya terdapat sedikit
        pelatihan sebagai bagian dari
        manajemen perubahan.', 'Keberhasilan proses perubahan
        setidaknya bergantung pada upaya dan
        pengalaman unit/tim manajemen
        perubahan khusus yang dibentuk
        secara formal, di mana struktur dan
        tugas dan tanggung jawabnya telah
        dituangkan dalam dokumen formal.', 'Proses manajemen perubahan
        setidaknya telah dilakukan secara
        rutin dan formal, di mana sudah
        terdapat prosedur baku/standar atas
        proses manajemen perubahan.', 'Terdapat pelatihan dan alat
        pendukung bagi para pemimpin proyek
        perubahan dan anggota tim (change
        agent).', 'Keberhasilan proses perubahan
        bergantung pada organisasi secara
        keseluruhan, termasuk upaya dan
        pengalaman unit/tim manajemen
        perubahan khusus yang dibentuk
        secara formal. Dalam hal ini, unit/tim
        manajemen perubahan juga akan
        melakukan pengukuran keberhasilan
        atas pelaksanaan manajemen
        perubahan sebagai langkah
        evaluasi/pengujian dan tindak lanjut
        untuk manajemen perubahan ke
        depannya', ' Proses manajemen perubahan
        setidaknya telah dilakukan secara rutin
        dan formal, di mana sudah terdapat
        prosedur baku/standar atas proses
        manajemen perubahan, termasuk
        standar pengukuran keberhasilan atas
        pelaksanaan aktivitas manajemen
        perubahan.', 'Terdapat pelatihan secara berkala dan
        BLU berpartisipasi aktif dalam
        mendukung inisiatif perubahan.', 'Keberhasilkan manajemen perubahan
        sudah sepenuhnya bergantung pada
        organisasi di mana setidaknya
        manajemen perubahan telah
        terintegrasi secara otomatis dengan
        bantuan infrastruktur yang memadai', 'Proses manajemen perubahan sudah
        dalam tahap continuous improvement
        dan dapat memproyeksikan
        keberhasilan manajemen perubahan
        dan peran terhadap organisasi', 'Organisasi setidaknya telah memiliki
        kesadaran terkait pentingnya
        pengelolaan environmental footprint
        dalam menjalankan kegiatan
        operasionalnya.', 'Kegiatan pengelolaan environmental
        footprint setidaknya telah dilakukan
        secara ad-hoc atau setidaknya telah
        dilakukan berdasarkan permintaan
        dari pihak internal maupun eksternal.', 'Dokumentasi yang berkaitan dengan
        kegiatan pengelolaan environmental
        footprint setidaknya bersifat informal.', 'Kegiatan pengelolaan environmental
        footprint setidaknya telah didefinisikan
        meskipun belum terdapat standar
        yang baku dan belum dilakukan secara
        berkala (contoh: pelaporan
        pengelolaan environmental footprint
        dilakukan 1 tahun sekali).', 'Dokumentasi yang berkaitan dengan
        kegiatan pengelolaan environmental footprint setidaknya telah bersifat
        formal dan sudah konsisten.', 'Identifikasi kebutuhan dari internal
        dan eksternal BLU untuk keperluan
        pelaksanaan aktivitas terkait
        pengelolaan environmental footprint
        setidaknya sudah mulai dilakukan.', 'Kegiatan pengelolaan environmental
        footprint oleh BLU setidaknya telah
        mempertimbangkan isu lingkungan
        terkini dalam skala nasional dan
        internasional, analisis internal dan
        eksternal, serta berbagai riset.', 'Standar baku dalam melakukan
        kegiatan pengelolaan environmental
        footprint setidaknya telah tersedia.
        Standar tersebut setidaknya telah
        mempertimbangkan seluruh faktor,
        mulai dari kebutuhan internal dan
        eksternal hingga kebutuhan
        dokumentasi.', 'Kegiatan pengelolaan environmental
        footprint setidaknya telah dilakukan
        secara berkala sesuai dengan standar
        baku yang telah ditetapkan.', 'Kegiatan pengelolaan environmental
        footprint oleh BLU setidaknya telah
        memiliki proses pengukuran atas
        aktivitas-aktivitas yang telah dilakukan
        untuk mengetahui dampak dari
        aktivitas tersebut.', 'Standar baku dalam melakukan
        kegiatan pengelolaan environmental
        footprint setidaknya telah menetapkan
        proses penyusunan metode
        pengukuran dampak lingkungan atas
        pengelolaan environmental footprint.
        Proses penyusunan metode
        pengukuran tersebut setidaknya telah
        mempertimbangkan penggunaan
        standar internasional dalam
        pengelolaan environmental footprint.', 'Terdapat aktivitas peninjauan dan
        pengawasan oleh pejabat berwenang
        atas kegiatan pengelolaan
        environmental footprint.', 'Kegiatan pengelolaan environmental
        footprint telah memenuhi standar
        internasional ISO 14001 terkait sistem
        manajemen lingkungan yang juga
        mencakup pengelolaan dan
        pengurangan limbah berbahaya.', 'Kegiatan pengelolaan environmental
        footprint menjadi dasar organisasi
        dalam mengembangkan action plan
        untuk mengatasi isu lingkungan yang
        teridentifikasi dari kegiatan tersebut.', 'Hasil dari pengukuran dampak
        lingkungan dan action plan yang
        disusun terkait pengelolaan
        environmental footprint telah
        dipertimbangkan dalam perumusan
        rencana strategis organisasi.', 'Organisasi setidaknya telah memiliki
        kesadaran terkait pentingnya efisiensi
        penggunaan sumber daya dalam
        melakukan kegiatan operasionalnya.', 'Kegiatan yang bertujuan untuk
        efisiensi penggunaan sumber daya
        setidaknya telah dilakukan secara adhoc, atau setidaknya telah dilakukan
        berdasarkan permintaan dari pihak
        internal maupun eksternal.', 'Dokumentasi yang berkaitan dengan
        kegiatan efisiensi penggunaan sumber
        daya setidaknya bersifat informal.', 'Kegiatan yang bertujuan untuk
        efisiensi penggunaan sumber daya
        setidaknya telah didefinisikan
        meskipun belum terdapat standar
        yang baku, serta belum dilakukan
        secara berkala (contoh: pelaporan
        penggunaan sumber daya dilakukan 1
        tahun sekali).', 'Dokumentasi yang berkaitan dengan
        proses efisiensi sumber daya setidaknya telah bersifat formal dan
        sudah konsisten.', 'Identifikasi kebutuhan dari internal
        dan eksternal BLU untuk keperluan
        pelaksanaan aktivitas terkait efisiensi
        penggunaan sumber daya setidaknya
        sudah mulai dilakukan.', 'Kegiatan efisiensi penggunaan sumber
        daya setidaknya telah
        mempertimbangkan isu lingkungan
        terkini dalam skala nasional dan
        internasional, analisis internal dan
        eksternal, serta berbagai riset.', 'Standar baku dalam melakukan
        kegiatan efisiensi penggunaan sumber
        daya setidaknya telah tersedia.
        Standar tersebut setidaknya telah
        mempertimbangkan seluruh faktor,
        mulai dari kebutuhan internal dan
        eksternal hingga kebutuhan
        dokumentasi.', 'Kegiatan efisiensi penggunaan sumber
        daya setidaknya telah dilakukan
        secara berkala sesuai dengan standar
        baku yang telah ditetapkan.', ' Penyusunan metode pengukuran atas
        penggunaan sumber daya sudah
        mempertimbangkan seluruh faktor dan
        menggunakan standar internasional
        dalam penggunaan sumber daya.', 'Standar baku dalam melakukan
        kegiatan efisiensi penggunaan sumber
        daya setidaknya telah menetapkan
        proses penyusunan metode
        pengukuran dampak lingkungan atas
        penggunaan sumber daya. Proses
        penyusunan metode pengukuran
        tersebut setidaknya telah
        mempertimbangkan penggunaan
        standar internasional dalam
        penggunaan sumber daya.', 'Terdapat aktivitas peninjauan dan
        pengawasan oleh pejabat berwenang
        atas penggunaan sumber daya.', 'Kegiatan efisiensi penggunaan sumber
        daya telah memenuhi standar
        internasional ISO 14001 terkait sistem
        manajemen lingkungan yang juga
        mencakup penggunaan sumber daya
        untuk mencapai eko-efisiensi.', 'Kegiatan efisiensi penggunaan sumber
        daya menjadi dasar organisasi dalam mengembangkan action plan untuk
        mengatasi isu lingkungan yang
        teridentifikasi dari kegiatan tersebut.', 'Hasil dari pengukuran dampak
        lingkungan dan action plan yang
        disusun terkait penggunaan sumber
        daya telah dipertimbangkan dalam
        perumusan rencana strategis
        organisasi.'
    ];

    $level = [
        '1', '1', '1', '2', '2', '2', '3', '3', '3', '4', '4',
        '4', '5', '5', '5', '1', '1', '2', '2', '3', '3', '4', '4', '5', '5', '1', '1', '1', '2', '2', '2', '3', '3', '3', '4', '4', '4', '5', '5', '5', '1', '1', '2', '2', '3', '3', '4', '4', '4', '4', '1', '1', '2', '2', '3', '3', '4', '4', '5', '5', '1', '1', '2', '2', '3', '3', '4', '4', '5', '5', '1', '1', '1', '1', '2', '2', '2', '2', '3', '3', '3', '3', '4', '4', '4', '4', '5', '5', '5', '5', '1', '1', '2', '2', '3', '3', '4', '4', '5', '5', '1', '1', '1', '2', '2', '2', '2', '2', '3', '3', '3', '3', '4', '4', '4', '5', '5', '5', '1', '1', '2', '2', '3', '3', '4', '4', '4', '4', '5', '5', '1', '1', '1', '1', '2', '2', '2', '2', '3', '3', '3', '4', '4', '4', '4', '5', '5', '5', '1', '1', '1', '2', '2', '2', '3', '3', '3', '3', '3', '4', '4', '4', '5', '5', '5', '1', '1', '2', '2', '3', '3', '3', '3', '4', '4', '4', '5', '5', '1', '1', '2', '2', '3', '3', '3', '3', '4', '4', '5', '5', '1', '1', '2', '2', '3', '3', '3', '4', '4', '5', '5', '1', '1', '1', '2', '2', '2', '3', '3', '3', '3', '4', '4', '5', '5', '5', '1', '1', '1', '2', '2', '2', '3', '3', '3', '3', '4', '4', '5', '5', '5', '1', '1', '2', '2', '3', '3', '3', '3', '4', '4', '4', '5', '5', '5', '1', '1', '2', '2', '3', '3', '3', '4', '4', '4', '5', '5', '1', '1', '1', '2', '2', '3', '3', '3', '3', '4', '4', '5', '5', '1', '1', '2', '2', '2', '3', '3', '3', '4', '4', '4', '5', '5', '1', '1', '1', '2', '2', '2', '3', '3', '3', '4', '4', '4', '5', '5', '5', '1', '1', '1', '2', '2', '2', '3', '3', '3', '4', '4', '4', '5', '5', '5'
    ];
    dd(explode('.', $data[0]));
    dd(count($work_product));
    dd(count($kriteria_indikator));
    dd(count($level));
});
