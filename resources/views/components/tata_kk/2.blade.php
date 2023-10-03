<div class="card">
    <div class="card-header">
        <h2 class="card-title" style="font-weight: 600">Formulir TK.2 - Etika Bisnis</h2>
    </div>
    <div id="button-datatable"></div>
    <div class="card-body">
        <div class="form-tambah">
            <div class="row mb-3">
                <label class="col-12 form-label">
                    TK.2.1 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator21" id="indikator211"
                            {{ count($inputan) > 0 ? '' : 'checked' }}
                            {{ $inputan ? ($inputan['indikator21'] == 1 ? 'checked' : '') : '' }} value="1">
                        <label class="form-check-label" for="indikator211">
                            Kode etik organisasi (spesifik untuk internal organisasi) setidaknya telah ditetapkan secara
                            lisan atau informal.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator21" id="indikator212"
                            {{ $inputan ? ($inputan['indikator21'] == 2 ? 'checked' : '') : '' }} value="2">
                        <label class="form-check-label" for="indikator212">
                            Kode etik organisasi setidaknya telah disusun dan ditetapkan secara formal untuk kelompok
                            kerja atau divisi tertentu.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator21" id="indikator213"
                            {{ $inputan ? ($inputan['indikator21'] == 3 ? 'checked' : '') : '' }} value="3">
                        <label class="form-check-label" for="indikator213">
                            Kode etik organisasi telah disusun dan ditetapkan secara formal dalam kebijakan baku/standar
                            yang berlaku di lingkungan organisasi secara keseluruhan serta Kode etik organisasi
                            setidaknya sudah dikomunikasikan secara rutin dalam setiap kegiatan induction/on-boarding
                            kepada pegawai baru
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator21" id="indikator214"
                            {{ $inputan ? ($inputan['indikator21'] == 4 ? 'checked' : '') : '' }} value="4">
                        <label class="form-check-label" for="indikator214">
                            Organisasi setidaknya telah
                            melaksanakan reviu dan evaluasi
                            untuk memastikan kode etik organisasi
                            sudah ditegakkan/diterapkan di
                            seluruh organisasi.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator21" id="indikator215"
                            {{ $inputan ? ($inputan['indikator21'] == 5 ? 'checked' : '') : '' }} value="5">
                        <label class="form-check-label" for="indikator215">
                            Hasil reviu dan evaluasi digunakan
                            sebagai umpan balik (feedback) atau
                            referensi perbaikan atau penyesuaian
                            kode etik organisasi periode
                            berikutnya.
                        </label>
                    </div>
                </div>
                @error('indikator21')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    TK.2.2 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator22" id="indikator221"
                            {{ count($inputan) > 0 ? '' : 'checked' }}
                            {{ $inputan ? ($inputan['indikator22'] == 1 ? 'checked' : '') : '' }} value="1">
                        <label class="form-check-label" for="indikator221">
                            Kode etik organisasi setidaknya sudah
                            diterapkan atau berlaku dalam
                            skala/lingkup yang kecil seperti
                            kelompok kerja atau divisi tertentu.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator22" id="indikator222"
                            {{ $inputan ? ($inputan['indikator22'] == 2 ? 'checked' : '') : '' }} value="2">
                        <label class="form-check-label" for="indikator222">
                            Kode etik organisasi setidaknya sudah
                            dikomunikasikan secara ad-hoc,
                            berdasarkan permintaan dari pihak
                            manajemen.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator22" id="indikator223"
                            {{ $inputan ? ($inputan['indikator22'] == 3 ? 'checked' : '') : '' }} value="3">
                        <label class="form-check-label" for="indikator223">
                            Kode etik organisasi setidaknya sudah
                            dikomunikasikan secara rutin kepada
                            seluruh pegawai minimal satu kali
                            dalam setahun, sehingga tidak ada kesenjangan pemahaman antara
                            pegawai lama dan pegawai baru serta Peraturan atau ketentuan reward and
                            punishment untuk setiap pelanggaran
                            atau kepatuhan atas kode etik
                            organisasi setidaknya telah ditetapkan
                            secara formal.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator22" id="indikator224"
                            {{ $inputan ? ($inputan['indikator22'] == 4 ? 'checked' : '') : '' }} value="4">
                        <label class="form-check-label" for="indikator224">
                            Organisasi setidaknya telah
                            memastikan bahwa sistem reward and
                            punishment dari setiap pelanggaran
                            atau kepatuhan terhadap kode etik
                            organisasi telah diterapkan
                            /diberlakukan dengan tegas di seluruh
                            organisasi.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator22" id="indikator225"
                            {{ $inputan ? ($inputan['indikator22'] == 5 ? 'checked' : '') : '' }} value="5">
                        <label class="form-check-label" for="indikator225">
                            Organisasi selalu mempertimbangkan
                            masukan dari setiap stakeholder dalam
                            melakukan perbaikan/penyesuaian
                            kode etik organisasi.
                        </label>
                    </div>
                </div>
                @error('indikator22')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>
