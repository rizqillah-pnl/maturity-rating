<div class="card">
    <div class="card-header">
        <h2 class="card-title" style="font-weight: 600">Formulir TK.3 - Stakeholder Relationship</h2>
    </div>
    <div id="button-datatable"></div>
    <div class="card-body">
        <div class="form-tambah">
            <div class="row mb-3">
                <label class="col-12 form-label">
                    TK.3.1 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator31" id="indikator311"
                            {{ count($inputan) > 0 ? '' : 'checked' }}
                            {{ $inputan ? ($inputan['indikator31'] == 1 ? 'checked' : '') : '' }} value="1">
                        <label class="form-check-label" for="indikator311">
                            Organisasi setidaknya telah menyadari
                            pentingnya mengelola hubungan
                            antar-stakeholder dengan baik, demi
                            mendukung kegiatan operasionalnya
                            sehari-hari.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator31" id="indikator312"
                            {{ $inputan ? ($inputan['indikator31'] == 2 ? 'checked' : '') : '' }} value="2">
                        <label class="form-check-label" for="indikator312">
                            Organisasi setidaknya telah
                            mengidentifikasi key stakeholders
                            internal dan eksternal yang dalam hal
                            ini disesuaikan dengan nature dan
                            proses bisnis setiap organisasi.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator31" id="indikator313"
                            {{ $inputan ? ($inputan['indikator31'] == 3 ? 'checked' : '') : '' }} value="3">
                        <label class="form-check-label" for="indikator313">
                            Organisasi setidaknya telah melakukan
                            pemetaan (mapping) hubungan antarstakeholders.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator31" id="indikator314"
                            {{ $inputan ? ($inputan['indikator31'] == 4 ? 'checked' : '') : '' }} value="4">
                        <label class="form-check-label" for="indikator314">
                            Data dan informasi yang bersifat
                            antar-stakeholder telah dikelola secara
                            terpusat, sehingga mendukung proses
                            pengambilan keputusan terhadap
                            suatu isu menjadi lebih cepat, efektif,
                            dan efisien.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator31" id="indikator315"
                            {{ $inputan ? ($inputan['indikator31'] == 5 ? 'checked' : '') : '' }} value="5">
                        <label class="form-check-label" for="indikator315">
                            Hasil reviu dan evaluasi terhadap
                            pengelolaan stakeholder`s relationship
                            setidaknya telah digunakan untuk
                            melihat relevansi terhadap proses
                            bisnis organisasi terkini.
                        </label>
                    </div>
                </div>
                @error('indikator31')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    TK.3.2 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator32" id="indikator321"
                            {{ count($inputan) > 0 ? '' : 'checked' }}
                            {{ $inputan ? ($inputan['indikator32'] == 1 ? 'checked' : '') : '' }} value="1">
                        <label class="form-check-label" for="indikator321">
                            Organisasi setidaknya telah menyadari
                            bahwa terdapat isu dan concern yang
                            bersifat antar-stakeholder yang
                            memerlukan kolaborasi untuk
                            penyelesaiannya, meskipun saat ini
                            belum terdapat tindak lanjut untuk
                            mengelola hubungan antarstakeholder tersebut.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator32" id="indikator322"
                            {{ $inputan ? ($inputan['indikator32'] == 2 ? 'checked' : '') : '' }} value="2">
                        <label class="form-check-label" for="indikator322">
                            Organisasi setidaknya telah
                            mendefinisikan peran dan tanggung
                            jawab dari masing-masing stakeholder.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator32" id="indikator323"
                            {{ $inputan ? ($inputan['indikator32'] == 3 ? 'checked' : '') : '' }} value="3">
                        <label class="form-check-label" for="indikator323">
                            Organisasi setidaknya telah
                            mengidentifikasi dan menganalisis
                            tindak lanjut atas isu dan concern yang
                            bersifat antar-stakeholder serta Terdapat panduan penanganan isu dan
                            concern yang bersifat antarstakeholder dengan mengacu pada
                            leading practice.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator32" id="indikator324"
                            {{ $inputan ? ($inputan['indikator32'] == 4 ? 'checked' : '') : '' }} value="4">
                        <label class="form-check-label" for="indikator324">
                            Organisasi telah melaksanakan reviu
                            dan evaluasi secara berkala terhadap
                            stakeholder`s relationship untuk
                            memastikan berbagai hal seperti
                            daftar key stakeholders, peran dan tanggung jawab, pemetaan hubungan
                            antar key stakeholders, isu dan
                            concern beserta dokumen panduannya
                            selalu up to date.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator32" id="indikator325"
                            {{ $inputan ? ($inputan['indikator32'] == 5 ? 'checked' : '') : '' }} value="5">
                        <label class="form-check-label" for="indikator325">
                            Organisasi mempertimbangkan
                            masukan dari setiap stakeholder dalam
                            melakukan perbaikan/penyesuaian
                            proses bisnis organisasi (layanan
                            organisasi).
                        </label>
                    </div>
                </div>
                @error('indikator32')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>
