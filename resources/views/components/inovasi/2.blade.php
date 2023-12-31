<div class="card">
    <div class="card-header">
        <h2 class="card-title" style="font-weight: 600">Formulir IN.2 - Proses Inovasi</h2>
    </div>
    <div class="card-body">
        <div class="form-tambah">
            <div class="row mb-3">
                <label class="col-12 form-label">
                    IN.2.1 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator21" id="indikator211"
                            {{ count($inputan) > 0 ? '' : 'checked' }}
                            {{ $inputan ? ($inputan['indikator21'] == 1 ? 'checked' : '') : '' }} value="1">
                        <label class="form-check-label" for="indikator211">
                            Organisasi setidaknya telah memiliki
                            kesadaran terkait pentingnya proses
                            inovasi dalam mendukung kegiatan
                            operasional dan kelangsungan bisnis
                            organisasi.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator21" id="indikator212"
                            {{ $inputan ? ($inputan['indikator21'] == 2 ? 'checked' : '') : '' }} value="2">
                        <label class="form-check-label" for="indikator212">
                            Organisasi setidaknya telah melakukan
                            proses perancangan inovasi secara
                            rutin/berulang dan informal.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator21" id="indikator213"
                            {{ $inputan ? ($inputan['indikator21'] == 3 ? 'checked' : '') : '' }} value="3">
                        <label class="form-check-label" for="indikator213">
                            Organisasi setidaknya telah
                            mendefinisikan standar baku dan
                            prosedur formal dalam melakukan
                            proses inovasi.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator21" id="indikator214"
                            {{ $inputan ? ($inputan['indikator21'] == 4 ? 'checked' : '') : '' }} value="4">
                        <label class="form-check-label" for="indikator214">
                            Organisasi setidaknya telah
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
                            prosedur yang telah ditetapkan serta Terdapat pengukuran hasil inovasi
                            yang telah diimplementasikan secara
                            berkala, termasuk pengukuran atas
                            ketercapaian/keberhasilan inovasi,
                            dampak inovasi, dan sebagainya.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator21" id="indikator215"
                            {{ $inputan ? ($inputan['indikator21'] == 5 ? 'checked' : '') : '' }} value="5">
                        <label class="form-check-label" for="indikator215">
                            Hasil evaluasi atas pelaksanaan proses
                            inovasi digunakan sebagai dasar untuk
                            melakukan proses inovasi berikutnya,
                            sehingga tercipta continuous
                            improvement.
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
                    IN.2.2 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator22" id="indikator221"
                            {{ count($inputan) > 0 ? '' : 'checked' }}
                            {{ $inputan ? ($inputan['indikator22'] == 1 ? 'checked' : '') : '' }} value="1">
                        <label class="form-check-label" for="indikator221">
                            Organisasi setidaknya telah melakukan
                            proses inovasi secara ad-hoc dan/atau
                            berdasarkan permintaan dari pihak
                            manajemen.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator22" id="indikator222"
                            {{ $inputan ? ($inputan['indikator22'] == 2 ? 'checked' : '') : '' }} value="2">
                        <label class="form-check-label" for="indikator222">
                            Organisasi setidaknya telah melakukan
                            proses pembuatan inovasi secara rutin
                            dan informal.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator22" id="indikator223"
                            {{ $inputan ? ($inputan['indikator22'] == 3 ? 'checked' : '') : '' }} value="3">
                        <label class="form-check-label" for="indikator223">
                            Proses inovasi dilakukan secara
                            terintegrasi dan saling mendukung,
                            tidak overlapping atau tumpang tindih serta Proses inovasi sudah diterapkan atau
                            dilaksanakan di seluruh organisasi
                            secara konsisten sesuai dengan
                            panduan yang telah ditetapkan.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator22" id="indikator224"
                            {{ $inputan ? ($inputan['indikator22'] == 4 ? 'checked' : '') : '' }} value="4">
                        <label class="form-check-label" for="indikator224">
                            Proses inovasi dijadikan sebagai Key
                            Performance Indicator (KPI) pada
                            unit/bagian di organisasi.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator22" id="indikator225"
                            {{ $inputan ? ($inputan['indikator22'] == 5 ? 'checked' : '') : '' }} value="5">
                        <label class="form-check-label" for="indikator225">
                            Organisasi memiliki innovation tools
                            yang mampu mendukung pelaksanaan
                            proses inovasi, di mana tools ini dapat
                            digunakan oleh seluruh
                            unit/tim/individu di organisasi.
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
