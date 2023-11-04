<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AspekMaturity;
use App\Models\KomponenHasil;
use App\Models\LevelMaturity;
use App\Models\InputanMaturity;
use App\Models\DokumenPendukung;
use App\Models\IndikatorMaturity;
use App\Models\VariabelIndikator;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class DashboardController extends Controller
{
    public function index()
    {
        $inputan_maturity = InputanMaturity::select('aspek_maturity_id', DB::raw('count(*) as total'))
            ->where('user_id', auth()->user()->id)
            ->groupBy('aspek_maturity_id')
            ->get();
        $new_inputan = [];
        foreach ($inputan_maturity as $value) {
            $new_inputan[$value->aspek_maturity_id] = $value->total;
        }

        return view('index', ['data_count' => $new_inputan]);
    }

    public function maturity_rating()
    {
        $data = AspekMaturity::with(['indikator_maturity' => function ($model) {
            $model->with(['kriteria_maturity']);
        }])->get();

        $level = LevelMaturity::all();
        return view('pages.maturity_rating', ['title' => 'Aspek Maturity Rating', 'data' => $data, 'level' => $level]);
    }

    public function dokumen_pendukung()
    {
        $aspek_maturity = AspekMaturity::with(['indikator_maturity' => function ($model) {
            $model->with(['dokumen_pendukung' => function ($model) {
                $model->where('user_id', auth()->user()->id);
            }]);
        }])->get();

        $indikator_maturity = IndikatorMaturity::all()->toArray();
        foreach ($indikator_maturity as $index => $row) {
            $indikator_maturity[$index] = strtolower(str_replace('.', '', $row['kode_indikator']));
        }

        $level = LevelMaturity::all();
        return view('pages.dokumen_pendukung', ['title' => 'Dokumen Pendukung', 'aspek_maturity' => $aspek_maturity, 'level' => $level, 'indikator_maturity' => $indikator_maturity]);
    }

    public function upload_dokumen(Request $request)
    {
        if ($request->hapus) {
            $data = DokumenPendukung::find($request->hapus);
            Storage::delete($data->files);
            DokumenPendukung::destroy($data->id);

            return redirect()->back()->with('success', 'Dokumen Pendukung Berhasil Dihapus!');
        } else {
            foreach ($request->nama_files as $row) {
                $outputName = null;
                if ($request->hasFile($row)) {
                    $request->validate([
                        $row => ['required', 'file', 'mimes:pdf']
                    ]);
                    if ($request->file($row)->getSize() > 10500000) {
                        continue;
                    }

                    $extFile = $request->file($row)->getClientOriginalExtension();
                    $realname = strtr($request->file($row)->getClientOriginalName(), ['+' => ' ', '_' => ' ', '-' => ' ', '*' => ' ', '~' => ' ', '=' => ' ', '^' => ' ', '%' => ' ', '$' => ' ', '#' => ' ', '@' => ' ', '!' => ' ']);
                    $outputName = $row . '_' . now()->timestamp . '.' . $extFile;
                    $outputName = $request->file($row)->storeAs($request->path(), str_replace('-', '_', $outputName));

                    DokumenPendukung::create(['indikator_maturity_id' => strtoupper(str_replace('_', '.', str_replace('data_file_', '', $row))), 'files' => $outputName, 'real_name' => $realname, 'user_id' => auth()->user()->id]);
                }
            }
            return redirect()->back()->with('success', 'Dokumen Pendukung Berhasil Disimpan!');
        }
    }

    public function clear_all()
    {
        VariabelIndikator::where('user_id', auth()->user()->id);
        KomponenHasil::where('user_id', auth()->user()->id);
        InputanMaturity::where('user_id', auth()->user()->id);
        $dok = DokumenPendukung::where('user_id', auth()->user()->id)->get();
        foreach ($dok as $row) {
            Storage::delete($row->files);
        }
        DokumenPendukung::where('user_id', auth()->user()->id);
        return redirect()->back()->with('success', 'Berhasil Menghapus Seluruh Data!');
    }

    public function rekap_data()
    {
        $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();

        $data = AspekMaturity::with(['indikator_maturity' => function ($model) {
            $model->with(['dokumen_pendukung' => function ($model) {
                $model->where('user_id', auth()->user()->id);
            }, 'inputan_maturity' => function ($model) {
                $model->where('user_id', auth()->user()->id);
            }, 'variabel_indikator' => function ($model) {
                $model->where('user_id', auth()->user()->id);
            }, 'komponen_hasil' => function ($model) {
                $model->where('user_id', auth()->user()->id);
            }]);
        }])->get();

        // SHEET FOR DATA AND VARIABLE
        $sheet = $spreadsheet->getActiveSheet();
        foreach ($data as $index => $row) {
            // SHEET CONFIG
            $sheet
                ->getColumnDimension('A')
                ->setWidth(5);
            $sheet
                ->getColumnDimension('B')
                ->setWidth(14);
            $sheet
                ->getColumnDimension('C')
                ->setWidth(25);
            $sheet
                ->getColumnDimension('D')
                ->setWidth(14);
            $sheet
                ->getColumnDimension('E')
                ->setWidth(23);
            $sheet
                ->getColumnDimension('F')
                ->setWidth(27);
            $sheet
                ->getColumnDimension('G')
                ->setWidth(25);
            $sheet
                ->getColumnDimension('H')
                ->setWidth(25);
            $sheet
                ->getColumnDimension('I')
                ->setWidth(30);


            // SET HEADER
            $sheet->mergeCells('A1:I1');
            $sheet->setCellValue('A1', ($index + 1) . ". ASPEK "  . strtoupper($row->nama_aspek));
            $sheet->setCellValue('A2', "Bobot =  " . $row->bobot . '%');
            $sheet->mergeCells('A2:I2');

            // ADD DATA
            $sheet
                ->setCellValue('A4', 'No')
                ->setCellValue('B4', 'Kode Indikator')
                ->setCellValue('C4', 'Nama Indikator')
                ->setCellValue('D4', 'Nilai Indikator')
                ->setCellValue('E4', 'Variabel Indikator')
                ->setCellValue('E5', 'Nama Variabel')
                ->setCellValue('F5', 'Nilai Variabel')
                ->setCellValue('G4', 'Input Maturity')
                ->setCellValue('G5', 'Nama Inputan')
                ->setCellValue('H5', 'Nilai Inputan')
                ->setCellValue('I4', 'Dokumen Pendukung');

            $sheet->mergeCells('A4:A5');
            $sheet->mergeCells('B4:B5');
            $sheet->mergeCells('C4:C5');
            $sheet->mergeCells('D4:D5');
            $sheet->mergeCells('E4:F4');
            $sheet->mergeCells('G4:H4');
            $sheet->mergeCells('I4:I5');
            $sheet->getStyle('A1:I5')->getFont()->setBold(true);

            $cell = 6;
            $cell2 = $cell;
            $cell3 = $cell;
            $old_cell = $cell;
            // INSERT DATA
            foreach ($row->indikator_maturity as $index2 => $row2) {
                // INDIKATOR MATURITY
                $sheet
                    ->setCellValue("A{$cell}", $index2 + 1)
                    ->setCellValue("B{$cell}", $row2->kode_indikator)
                    ->setCellValue("C{$cell}", $row2->nama_indikator)
                    ->setCellValue("D{$cell}", $row2->nilai);

                // VARIABEL MATURITY
                foreach ($row2->variabel_indikator as $index3 => $row3) {
                    $sheet
                        ->setCellValue("E{$cell}", $row3->variabel_fullname)
                        ->setCellValue("F{$cell}", $row3->hasil);

                    if (!(($index3 + 1) == count($row2->variabel_indikator))) {
                        $cell += 1;
                    }
                }

                // INPUTAN MATURITY
                foreach ($row2->inputan_maturity as $index4 => $row4) {
                    $sheet
                        ->setCellValue("G{$cell2}", $row4->tipe_inputan)
                        ->setCellValue("H{$cell2}", $row4->nilai);

                    if (!(($index4 + 1) == count($row2->inputan_maturity))) {
                        $cell2 += 1;
                    }
                }

                // DOKUMEN PENDUKUNG
                foreach ($row2->dokumen_pendukung as $index5 => $row5) {
                    $sheet
                        ->setCellValue("I{$cell3}", ($row5->real_name) ? $row5->real_name : '-');
                    $sheet->getCell("I{$cell3}")->getHyperlink()->setUrl(url('/storage') . '/' . $row5->files);

                    if (!(($index5 + 1) == count($row2->dokumen_pendukung))) {
                        $cell3 += 1;
                    }
                }


                // KOMPONEN HASIL
                $rata_rata = 0;
                foreach ($row2->komponen_hasil as $row6) {
                    $rata_rata += ($row6->nilai) ? $row6->nilai : 0;
                    $sheet
                        ->setCellValue("D{$old_cell}", $rata_rata);
                }

                if ($cell <= $cell2) {
                    $cell = $cell2;
                }
                if ($cell <= $cell3) {
                    $cell = $cell3;
                }


                $sheet->mergeCells('A' . $old_cell . ':A' . $cell);
                $sheet->mergeCells('B' . $old_cell . ':B' . $cell);
                $sheet->mergeCells('C' . $old_cell . ':C' . $cell);
                $sheet->mergeCells('D' . $old_cell . ':D' . $cell);

                // INCREMENT AND SET VALUE
                $cell += 1;
                $cell2 += 1;
                $cell3 += 1;
                $old_cell = $cell;


                // TABEL BORDER
                $sheet->getStyle("A4:I" . $cell - 1)
                    ->getBorders()
                    ->getAllBorders()
                    ->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN)
                    ->setColor(new \PhpOffice\PhpSpreadsheet\Style\Color('000'));
            }

            // CREATE NEW SHEET
            if (!(($index + 1) == count($data))) {
                $sheet = $spreadsheet->createSheet();
            }

            $spreadsheet->getActiveSheet()->getStyle('A')->getAlignment()->setVertical('center');
            $spreadsheet->getActiveSheet()->getStyle('A')->getAlignment()->setHorizontal('center');
            $spreadsheet->getActiveSheet()->getStyle('D')->getAlignment()->setVertical('center');
            $spreadsheet->getActiveSheet()->getStyle('D')->getAlignment()->setHorizontal('center');
            $spreadsheet->getActiveSheet()->getStyle('F')->getAlignment()->setVertical('center');
            $spreadsheet->getActiveSheet()->getStyle('F')->getAlignment()->setHorizontal('center');
            $spreadsheet->getActiveSheet()->getStyle('H')->getAlignment()->setVertical('center');
            $spreadsheet->getActiveSheet()->getStyle('H')->getAlignment()->setHorizontal('center');

            $spreadsheet->getActiveSheet()->getStyle('B')->getAlignment()->setVertical('center');
            $spreadsheet->getActiveSheet()->getStyle('C')->getAlignment()->setVertical('center');

            $spreadsheet->getActiveSheet()->getStyle('A1:I5')->getAlignment()->setVertical('center');
            $spreadsheet->getActiveSheet()->getStyle('A1:I5')->getAlignment()->setHorizontal('center');
        }


        // NEW SHEET FOR RANGKUMAN HASIL
        $sheet = $spreadsheet->createSheet();

        // CONFIG
        $sheet
            ->getColumnDimension('A')
            ->setWidth(5);
        $sheet
            ->getColumnDimension('B')
            ->setWidth(35);
        $sheet
            ->getColumnDimension('C')
            ->setWidth(13);
        $sheet
            ->getColumnDimension('D')
            ->setWidth(35);
        $sheet
            ->getColumnDimension('E')
            ->setWidth(15);
        $sheet
            ->getColumnDimension('F')
            ->setWidth(15);


        $sheet->mergeCells('A1:F1');
        $sheet->setCellValue('A1', "RANGKUMAN HASIL MATURITY BLU - " . strtoupper(auth()->user()->nama));
        $sheet->mergeCells('A2:F2');

        // GET DATA
        $aspek_maturity = AspekMaturity::with(['indikator_maturity' => function ($model) {
            $model->with(['komponen_hasil' => function ($model) {
                $model->where('user_id', auth()->user()->id);
            }]);
        }])->get();

        // ADD DATA
        $sheet
            ->setCellValue('A4', 'No')
            ->setCellValue('B4', 'Nama Aspek')
            ->setCellValue('C4', 'Bobot Aspek')
            ->setCellValue('D4', 'Nama Indikator')
            ->setCellValue('E4', 'Rata-rata Indikator')
            ->setCellValue('F4', 'Nilai Indikator');

        $sheet->getStyle('A1:F4')->getFont()->setBold(true);

        $cell = 5;
        $old_cell = $cell;

        // INSERT DATA
        $maturity = 0;
        foreach ($aspek_maturity as $index => $row) {
            // INDIKATOR MATURITY
            $sheet
                ->setCellValue("A{$cell}", $index + 1)
                ->setCellValue("B{$cell}", $row->kode_aspek . ' ' . $row->nama_aspek)
                ->setCellValue("C{$cell}", $row->bobot . '%');

            // VARIABEL MATURITY
            $rata_rata = 0;
            foreach ($row->indikator_maturity as $index2 => $row2) {
                $komponen_hasil = (count($row2->komponen_hasil) > 0) ? $row2->komponen_hasil : 0;
                $komponen_hasil = ($komponen_hasil !== 0) ? $komponen_hasil[0]->nilai : 0;
                $rata_rata += $komponen_hasil;

                $sheet
                    ->setCellValue("D{$cell}", $row2->kode_indikator . ' ' . $row2->nama_indikator)
                    ->setCellValue("F{$cell}", $komponen_hasil);

                if (!(($index2 + 1) == count($row->indikator_maturity))) {
                    $cell += 1;
                }
            }
            // GET AVG OF MATURITY
            $rata_rata = $rata_rata / count($row->indikator_maturity);
            $sheet->setCellValue("E" . $old_cell, $rata_rata);

            // GET MATURITY RATING
            $maturity +=  $rata_rata * ($row->bobot / 100);

            $sheet->mergeCells('A' . $old_cell . ':A' . $cell);
            $sheet->mergeCells('B' . $old_cell . ':B' . $cell);
            $sheet->mergeCells('C' . $old_cell . ':C' . $cell);
            $sheet->mergeCells('D' . $old_cell . ':D' . $cell);
            $sheet->mergeCells('E' . $old_cell . ':E' . $cell);

            // INCREMENT AND SET VALUE
            $cell += 1;
            $old_cell = $cell;

            // TABEL BORDER
            $sheet->getStyle("A4:F" . $cell - 1)
                ->getBorders()
                ->getAllBorders()
                ->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN)
                ->setColor(new \PhpOffice\PhpSpreadsheet\Style\Color('000'));
        }

        $sheet->setCellValue("A" . $cell + 2, "Hasil Maturity : " . $maturity . ' atau ' . (($maturity / 5) * 100) . '%');
        $sheet->mergeCells('A' . $cell + 2 . ':F' . $cell + 2);

        $matang = ($maturity >= 3) ? 'Sudah Siap!' : 'Belum Siap!';
        $sheet->setCellValue("A" . $cell + 3, "Tingkat Maturity(Kematangan) BLU Organisasi Anda dinyatakan : " . $matang);
        $sheet->mergeCells('A' . $cell + 3 . ':F' . $cell + 3);

        $sheet->getStyle('A' . $cell + 2 . ':F' . $cell + 3)->getFont()->setBold(true);

        $spreadsheet->getActiveSheet()->getStyle('A1:F' . $cell)->getAlignment()->setVertical('center');
        $spreadsheet->getActiveSheet()->getStyle('A1:F4')->getAlignment()->setHorizontal('center');
        $spreadsheet->getActiveSheet()->getStyle('A')->getAlignment()->setHorizontal('center');
        $spreadsheet->getActiveSheet()->getStyle('C')->getAlignment()->setHorizontal('center');
        $spreadsheet->getActiveSheet()->getStyle('E')->getAlignment()->setHorizontal('center');
        $spreadsheet->getActiveSheet()->getStyle('F')->getAlignment()->setHorizontal('center');


        // Print Out
        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        $response =  new StreamedResponse(
            function () use ($writer) {
                $writer->save('php://output');
            }
        );
        $response->headers->set('Content-Type', 'application/vnd.ms-excel');
        $response->headers->set('Content-Disposition', 'attachment;filename="Rekap_Data_' . date('d_F_Y') . '.xlsx"');
        $response->headers->set('Cache-Control', 'max-age=0');
        return $response;
    }
}
