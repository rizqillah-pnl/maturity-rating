<div class="card">
    <div class="card-header">
        <h2 class="card-title" style="font-weight: 600">Formulir KI.2 - Proses Bisnis</h2>
    </div>
    <div id="button-datatable"></div>
    <div class="card-body">
        <div class="form-tambah">
            <div class="row mb-3">
                <label class="col-12 form-label">
                    KI.2.1 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator21" id="indikator211"
                            {{ count($inputan) > 0 ? '' : 'checked' }}
                            {{ $inputan['indikator21'] == 1 ? 'checked' : '' }} value="1">
                        <label class="form-check-label" for="indikator211">
                            Proses bisnis pada organisasi setidaknya telah dikelola secara ad hoc.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator21" id="indikator212"
                            {{ $inputan['indikator21'] == 2 ? 'checked' : '' }} value="2">
                        <label class="form-check-label" for="indikator212">
                            Organisasi setidaknya memiliki arahan
                            dari manajemen eksekutif, rencana
                            strategis, serta ketersediaan anggaran
                            untuk menunjang kegiatan
                            operasional.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator21" id="indikator213"
                            {{ $inputan['indikator21'] == 3 ? 'checked' : '' }} value="3">
                        <label class="form-check-label" for="indikator213">
                            Seluruh proses bisnis organisasi telah
                            didefinisikan dalam prosedur baku
                            yang dilengkapi dengan tujuan, input,
                            proses, output, dan process owner.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator21" id="indikator214"
                            {{ $inputan['indikator21'] == 4 ? 'checked' : '' }} value="4">
                        <label class="form-check-label" for="indikator214">
                            Organisasi setidaknya mampu
                            memprediksi output yang dihasilkan
                            untuk selanjutnya digunakan sebagai
                            basis dalam meningkatkan kinerja,
                            kualitas layanan, cycle time, serta
                            memprediksi pendapatan organisasi serta Organisasi setidaknya memiliki
                            manajemen database, baseline, dan
                            analisis tren output organisasi.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator21" id="indikator215"
                            {{ $inputan['indikator21'] == 5 ? 'checked' : '' }} value="5">
                        <label class="form-check-label" for="indikator215">
                            Organisasi setidaknya memiliki
                            improvement dan sustainability
                            planning dalam meningkatkan kinerja
                            organisasi secara keseluruhan dalam
                            jangka panjang.
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
                    KI.2.2 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator22" id="indikator221"
                            {{ count($inputan) > 0 ? '' : 'checked' }}
                            {{ $inputan['indikator22'] == 1 ? 'checked' : '' }} value="1">
                        <label class="form-check-label" for="indikator221">
                            Panduan dalam melaksanakan proses
                            bisnis dan peningkatan kualitas layanan setidaknya dilakukan secara
                            informal.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator22" id="indikator222"
                            {{ $inputan['indikator22'] == 2 ? 'checked' : '' }} value="2">
                        <label class="form-check-label" for="indikator222">
                            Organisasi setidaknya telah mengelola
                            layanan dan produk dari pihak ketiga
                            untuk memenuhi kebutuhan internal
                            maupun eksternal organisasi.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator22" id="indikator223"
                            {{ $inputan['indikator22'] == 3 ? 'checked' : '' }} value="3">
                        <label class="form-check-label" for="indikator223">
                            Organisasi setidaknya mampu
                            mengelola barang dan jasa yang
                            diberikan kepada publik. Pada level ini,
                            organisasi dapat mengelola
                            infrastruktur, persediaan, dan sumber
                            daya lainnya untuk memastikan
                            layanan yang diberikan kepada
                            masyarakat berkualitas baik.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator22" id="indikator224"
                            {{ $inputan['indikator22'] == 4 ? 'checked' : '' }} value="4">
                        <label class="form-check-label" for="indikator224">
                            Organisasi setidaknya
                            mengintegrasikan dan meningkatkan
                            efektivitas serta efisiensi proses bisnis
                            melalui kolaborasi lintas unit serta Organisasi telah mengidentifikasi isu
                            atau potensi risiko penurunan kinerja
                            yang dapat diukur secara kuantitatif.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator22" id="indikator225"
                            {{ $inputan['indikator22'] == 5 ? 'checked' : '' }} value="5">
                        <label class="form-check-label" for="indikator225">
                            Organisasi telah melakukan analisis
                            terhadap stakeholder feedback untuk
                            mengidentifikasi potensi perbaikan
                            kinerja layanan proses bisnis
                            organisasi.

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
