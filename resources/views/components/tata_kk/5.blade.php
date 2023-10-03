<div class="card">
    <div class="card-header">
        <h2 class="card-title" style="font-weight: 600">Formulir TK.5 - Pengawasan dan Pelaporan</h2>
    </div>
    <div id="button-datatable"></div>
    <div class="card-body">
        <div class="form-tambah">
            <div class="row mb-3">
                <label class="col-12 form-label">
                    TK.5.1 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator51" id="indikator511"
                            {{ count($inputan) > 0 ? '' : 'checked' }}
                            {{ $inputan ? ($inputan['indikator51'] == 1 ? 'checked' : '') : '' }} value="1">
                        <label class="form-check-label" for="indikator511">
                            Aktivitas pengawasan dan pelaporan
                            setidaknya telah dilakukan secara adhoc dan/atau jika terdapat kebutuhan.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator51" id="indikator512"
                            {{ $inputan ? ($inputan['indikator51'] == 2 ? 'checked' : '') : '' }} value="2">
                        <label class="form-check-label" for="indikator512">
                            Aktivitas pengawasan dan pelaporan
                            setidaknya telah dilakukan secara
                            rutin (berulang).
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator51" id="indikator513"
                            {{ $inputan ? ($inputan['indikator51'] == 3 ? 'checked' : '') : '' }} value="3">
                        <label class="form-check-label" for="indikator513">
                            Aktivitas pengawasan dan pelaporan
                            setidaknya telah dilakukan secara
                            berkala dan terjadwal.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator51" id="indikator514"
                            {{ $inputan ? ($inputan['indikator51'] == 4 ? 'checked' : '') : '' }} value="4">
                        <label class="form-check-label" for="indikator514">
                            Struktur/unit/fungsi khusus yang
                            bertugas untuk mengelola aktivitas pengawasan dan pelaporan di dalam
                            organisasi setidaknya telah melakukan
                            reviu dan evaluasi (audit) berkala
                            terhadap pelaksanaan pengawasan
                            dan pelaporan untuk memastikan
                            bahwa aktivitas sesuai dengan
                            panduan yang telah ditetapkan.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator51" id="indikator515"
                            {{ $inputan ? ($inputan['indikator51'] == 5 ? 'checked' : '') : '' }} value="5">
                        <label class="form-check-label" for="indikator515">
                            Hasil reviu dan evaluasi terhadap
                            pelaksanaan pengawasan dan
                            pelaporan (audit) setidaknya telah
                            ditindaklanjuti sesuai dengan
                            rekomendasi perbaikan yang telah
                            didefinisikan.
                        </label>
                    </div>
                </div>
                @error('indikator51')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    TK.5.2 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator52" id="indikator521"
                            {{ count($inputan) > 0 ? '' : 'checked' }}
                            {{ $inputan ? ($inputan['indikator52'] == 1 ? 'checked' : '') : '' }} value="1">
                        <label class="form-check-label" for="indikator521">
                            Organisasi telah menghasilkan output
                            pekerjaan dari aktivitas pengawasan
                            dan pelaporan, yang setidaknya
                            bersifat informal.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator52" id="indikator522"
                            {{ $inputan ? ($inputan['indikator52'] == 2 ? 'checked' : '') : '' }} value="2">
                        <label class="form-check-label" for="indikator522">
                            Terdapat panduan yang setidaknya
                            mencakup beberapa aktivitas
                            pengawasan dan pelaporan (namun
                            belum mencakup lingkup aktivitas
                            minimal), sehingga dapat mendukung
                            organisasi untuk menghasilkan output
                            pekerjaan yang konsisten.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator52" id="indikator523"
                            {{ $inputan ? ($inputan['indikator52'] == 3 ? 'checked' : '') : '' }} value="3">
                        <label class="form-check-label" for="indikator523">
                            Terdapat panduan pengawasan dan
                            pelaporan baku dan standar dengan
                            mengacu pada leading practice, yang
                            setidaknya mencakup seluruh aktivitas
                            pengawasan dan pelaporan minimal,
                            sehingga dapat mendukung organisasi
                            untuk menghasilkan output pekerjaan
                            yang konsisten. Dalam hal ini,
                            termasuk tool/template/format
                            pelaporan untuk dapat menghasilkan
                            output pekerjaan yang konsisten.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator52" id="indikator524"
                            {{ $inputan ? ($inputan['indikator52'] == 4 ? 'checked' : '') : '' }} value="4">
                        <label class="form-check-label" for="indikator524">
                            Terdapat pelatihan dan penyuluhan
                            secara berkala terkait aktivitas
                            pengawasan dan pelaporan untuk
                            membangun awareness mengenai
                            pentingnya pelaksanakan pengawasan
                            dan pelaporan, serta untuk
                            memastikan setiap pihak memahami
                            proses dan prosedur pengawasan dan
                            pelaporan dengan baik.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator52" id="indikator525"
                            {{ $inputan ? ($inputan['indikator52'] == 5 ? 'checked' : '') : '' }} value="5">
                        <label class="form-check-label" for="indikator525">
                            Penggunaan SI/TI yang terpadu, yang
                            mendukung aktivitas pengawasan dan
                            pelaporan, serta dapat mendukung
                            penyediaan informasi bottom-up dan
                            top-down secara real-time dan akurat.
                        </label>
                    </div>
                </div>
                @error('indikator52')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    TK.5.3 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator53" id="indikator531"
                            {{ count($inputan) > 0 ? '' : 'checked' }}
                            {{ $inputan ? ($inputan['indikator53'] == 1 ? 'checked' : '') : '' }} value="1">
                        <label class="form-check-label" for="indikator531">
                            Aktivitas pengawasan dan pelaporan
                            setidaknya sudah diterapkan atau
                            berlaku dalam skala/lingkup yang kecil
                            seperti kelompok kerja atau divisi
                            tertentu.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator53" id="indikator532"
                            {{ $inputan ? ($inputan['indikator53'] == 2 ? 'checked' : '') : '' }} value="2">
                        <label class="form-check-label" for="indikator532">
                            Pelaksanaan aktivitas pengawasan dan
                            pelaporan setidaknya sudah
                            berdasarkan panduan yang tersedia.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator53" id="indikator533"
                            {{ $inputan ? ($inputan['indikator53'] == 3 ? 'checked' : '') : '' }} value="3">
                        <label class="form-check-label" for="indikator533">
                            Pengawasan dan pelaporan sudah
                            diterapkan atau dilaksanakan di
                            seluruh organisasi secara konsisten
                            sesuai dengan panduan yang telah
                            ditetapkan serta Organisasi setidaknya telah
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
                            laporan yang disajikan.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator53" id="indikator534"
                            {{ $inputan ? ($inputan['indikator53'] == 5 ? 'checked' : '') : '' }} value="5">
                        <label class="form-check-label" for="indikator534">
                            Organisasi secara konsisten berupaya
                            untuk berinovasi dalam praktik
                            pengawasan dan pelaporan.
                        </label>
                    </div>
                </div>
                @error('indikator53')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>
