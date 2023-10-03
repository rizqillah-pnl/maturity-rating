<div class="card">
    <div class="card-header">
        <h2 class="card-title" style="font-weight: 600">Formulir TK.4 - Manajemen Risiko</h2>
    </div>
    <div id="button-datatable"></div>
    <div class="card-body">
        <div class="form-tambah">
            <div class="row mb-3">
                <label class="col-12 form-label">
                    TK.4.1 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator41" id="indikator411"
                            {{ count($inputan) > 0 ? '' : 'checked' }}
                            {{ $inputan ? ($inputan['indikator41'] == 1 ? 'checked' : '') : '' }} value="1">
                        <label class="form-check-label" for="indikator411">
                            Manajemen risiko setidaknya telah
                            dilakukan secara ad-hoc dan/atau jika
                            terdapat kebutuhan.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator41" id="indikator412"
                            {{ $inputan ? ($inputan['indikator41'] == 2 ? 'checked' : '') : '' }} value="2">
                        <label class="form-check-label" for="indikator412">
                            Manajemen risiko setidaknya telah
                            dilakukan secara rutin (berulang).
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator41" id="indikator413"
                            {{ $inputan ? ($inputan['indikator41'] == 3 ? 'checked' : '') : '' }} value="3">
                        <label class="form-check-label" for="indikator413">
                            Manajemen risiko setidaknya telah
                            dilakukan secara berkala dan
                            terjadwal serta Terdapat panduan manajemen risiko
                            baku dan standar dengan mengacu
                            pada leading practice, yang setidaknya
                            mencakup seluruh risiko minimal,
                            sehingga dapat mendukung organisasi
                            untuk menghasilkan output pekerjaan
                            yang konsisten.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator41" id="indikator414"
                            {{ $inputan ? ($inputan['indikator41'] == 4 ? 'checked' : '') : '' }} value="4">
                        <label class="form-check-label" for="indikator414">
                            Struktur/unit/fungsi khusus yang
                            bertugas untuk mengelola aktivitas
                            manajemen risiko di dalam organisasi
                            setidaknya telah melakukan reviu dan
                            evaluasi (audit) berkala terhadap
                            pelaksanaan manajemen risiko untuk
                            memastikan bahwa penanganan risiko
                            telah dilakukan dengan tepat waktu
                            oleh risk-owner dan sesuai dengan
                            panduan yang telah ditetapkan.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator41" id="indikator415"
                            {{ $inputan ? ($inputan['indikator41'] == 5 ? 'checked' : '') : '' }} value="5">
                        <label class="form-check-label" for="indikator415">
                            Hasil reviu dan evaluasi (audit)
                            terhadap pelaksanaan manajemen
                            risiko telah ditindaklanjuti sesuai
                            dengan rekomendasi perbaikan yang
                            telah didefinisikan.
                        </label>
                    </div>
                </div>
                @error('indikator41')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    TK.4.2 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator42" id="indikator421"
                            {{ count($inputan) > 0 ? '' : 'checked' }}
                            {{ $inputan ? ($inputan['indikator42'] == 1 ? 'checked' : '') : '' }} value="1">
                        <label class="form-check-label" for="indikator421">
                            Organisasi telah menghasilkan output
                            pekerjaan dari aktivitas manajemen
                            risiko, yang setidaknya bersifat
                            informal.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator42" id="indikator422"
                            {{ $inputan ? ($inputan['indikator42'] == 2 ? 'checked' : '') : '' }} value="2">
                        <label class="form-check-label" for="indikator422">
                            Terdapat panduan manajemen risiko
                            yang setidaknya mencakup beberapa
                            risiko (namun belum mencakup
                            seluruh risiko minimal), sehingga
                            dapat mendukung organisasi untuk menghasilkan output pekerjaan yang
                            konsisten.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator42" id="indikator423"
                            {{ $inputan ? ($inputan['indikator42'] == 3 ? 'checked' : '') : '' }} value="3">
                        <label class="form-check-label" for="indikator423">
                            Manajemen risiko sudah diterapkan
                            atau dilaksanakan di seluruh
                            organisasi secara konsisten sesuai
                            dengan panduan yang telah
                            ditetapkan.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator42" id="indikator424"
                            {{ $inputan ? ($inputan['indikator42'] == 4 ? 'checked' : '') : '' }} value="4">
                        <label class="form-check-label" for="indikator424">
                            Terdapat pelatihan dan penyuluhan
                            secara berkala untuk seluruh pegawai
                            organisasi dalam rangka membangun
                            kesadaran (awareness) mengenai
                            risiko organisasi.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator42" id="indikator425"
                            {{ $inputan ? ($inputan['indikator42'] == 5 ? 'checked' : '') : '' }} value="5">
                        <label class="form-check-label" for="indikator425">
                            Penggunaan SI/TI yang terpadu, yang
                            mendukung real-time risk analytics.
                        </label>
                    </div>
                </div>
                @error('indikator42')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    TK.4.3 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator43" id="indikator431"
                            {{ count($inputan) > 0 ? '' : 'checked' }}
                            {{ $inputan ? ($inputan['indikator43'] == 1 ? 'checked' : '') : '' }} value="1">
                        <label class="form-check-label" for="indikator431">
                            Manajemen risiko setidaknya sudah
                            diterapkan atau berlaku dalam
                            skala/lingkup yang kecil seperti
                            kelompok kerja atau divisi tertentu.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator43" id="indikator432"
                            {{ $inputan ? ($inputan['indikator43'] == 2 ? 'checked' : '') : '' }} value="2">
                        <label class="form-check-label" for="indikator432">
                            Pelaksanaan aktivitas manajemen
                            risiko setidaknya sudah berdasarkan
                            panduan yang tersedia.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator43" id="indikator433"
                            {{ $inputan ? ($inputan['indikator43'] == 3 ? 'checked' : '') : '' }} value="3">
                        <label class="form-check-label" for="indikator433">
                            Organisasi setidaknya telah
                            menetapkan struktur/unit/fungsi
                            khusus yang bertugas untuk
                            mengelola aktivitas manajemen risiko
                            secara terpusat di dalam organisasi.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator43" id="indikator434"
                            {{ $inputan ? ($inputan['indikator43'] == 5 ? 'checked' : '') : '' }} value="5">
                        <label class="form-check-label" for="indikator434">
                            Organisasi secara konsisten telah
                            berupaya untuk berinovasi dalam
                            praktik manajemen risiko.
                        </label>
                    </div>
                </div>
                @error('indikator43')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>
