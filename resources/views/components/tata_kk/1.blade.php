<div class="card">
    <div class="card-header">
        <h2 class="card-title" style="font-weight: 600">Formulir TK.1 - Perencanaan Strategis
        </h2>
    </div>
    <div id="button-datatable"></div>
    <div class="card-body">
        <div class="form-tambah">
            <div class="row mb-3">
                <label class="col-12 form-label">
                    TK.1.1 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator11" id="indikator111"
                            {{ count($inputan) > 0 ? '' : 'checked' }}
                            {{ $inputan ? ($inputan['indikator11'] == 1 ? 'checked' : '') : '' }} value="1">
                        <label class="form-check-label" for="indikator111">
                            Penyusunan rencana strategis setidaknya telah dilakukan secara adhoc.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator11" id="indikator112"
                            {{ $inputan ? ($inputan['indikator11'] == 2 ? 'checked' : '') : '' }} value="2">
                        <label class="form-check-label" for="indikator112">
                            Penyusunan rencana strategis setidaknya telah dilakukan secara rutin oleh unit tertentu
                            (misal: Unit TI telah menyusun Rencana Strategis TI/IT Master Plan).
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator11" id="indikator113"
                            {{ $inputan ? ($inputan['indikator11'] == 3 ? 'checked' : '') : '' }} value="3">
                        <label class="form-check-label" for="indikator113">
                            Rencana strategis setidaknya telah dikembangkan secara berkala dan terjadwal, baik untuk
                            periode tahunan maupun lima tahunan serta Penyusunan rencana strategis setidaknya telah
                            dilakukan secara rutin dalam lingkup organisasi, dalam hal ini di dalam organisasi terdapat
                            1 (satu) rencana strategis yang berlaku untuk seluruh bagian di dalam organisasi.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator11" id="indikator114"
                            {{ $inputan ? ($inputan['indikator11'] == 4 ? 'checked' : '') : '' }} value="4">
                        <label class="form-check-label" for="indikator114">
                            Organisasi setidaknya telah melaksanakan reviu dan evaluasi untuk memastikan bahwa Rencana
                            Strategis sudah dilaksanakan sesuai dengan rencana (action plan atau roadmap) yang
                            ditetapkan serta Organisasi setidaknya telah melaksanakan analisis pencapaian target untuk
                            memprediksi probabilitas ketercapaian dari Rencana Strategis secara menyeluruh.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator11" id="indikator115"
                            {{ $inputan ? ($inputan['indikator11'] == 5 ? 'checked' : '') : '' }} value="5">
                        <label class="form-check-label" for="indikator115">
                            Data dan informasi yang diperoleh dari aktivitas reviu dan evaluasi, serta analisis
                            pencapaian target atas Rencana Strategis setidaknya digunakan sebagai umpan balik atau
                            referensi untuk penyusunan Rencana Strategis periode berikutnya.
                        </label>
                    </div>
                </div>
                @error('indikator11')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    TK.1.2 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator12" id="indikator121"
                            {{ count($inputan) > 0 ? '' : 'checked' }}
                            {{ $inputan ? ($inputan['indikator12'] == 1 ? 'checked' : '') : '' }} value="1">
                        <label class="form-check-label" for="indikator121">
                            Penyusunan rencana strategis setidaknya telah dilakukan oleh unit/divisi tertentu secara
                            informal.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator12" id="indikator122"
                            {{ $inputan ? ($inputan['indikator12'] == 2 ? 'checked' : '') : '' }} value="2">
                        <label class="form-check-label" for="indikator122">
                            Kebutuhan setiap stakeholder baik internal maupun eksternal yang terkait dengan perencanaan
                            strategis setidaknya sudah diidentifikasi dan dianalisis.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator12" id="indikator123"
                            {{ $inputan ? ($inputan['indikator12'] == 3 ? 'checked' : '') : '' }} value="3">
                        <label class="form-check-label" for="indikator123">
                            Terdapat panduan formal proses penyusunan rencana strategis yang bersifat baku dan
                            terstandardisasi, dilengkapi dengan Petunjuk Pelaksanaan yang terstruktur dan sistematis,
                            serta telah ditetapkan sebagai dokumen resmi organisasi yang berlaku secara menyeluruh
                            (ditetapkan sebagai kebijakan) serta Kebutuhan stakeholder yang sebelumnya sudah
                            diidentifikasi dan dianalisis dipertimbangkan dalam menyusun Rencana Strategis.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator12" id="indikator124"
                            {{ $inputan ? ($inputan['indikator12'] == 4 ? 'checked' : '') : '' }} value="4">
                        <label class="form-check-label" for="indikator124">
                            Rencana strategis diterjemahkan ke dalam bentuk KPI yang harus dicapai oleh organisasi
                            dan/atau unit/divisi, di mana organisasi juga telah melakukan reviu dan evaluasi atas
                            ketercapaian KPI tersebut.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator12" id="indikator125"
                            {{ $inputan ? ($inputan['indikator12'] == 5 ? 'checked' : '') : '' }} value="5">
                        <label class="form-check-label" for="indikator125">
                            Hasil reviu dan evaluasi atas ketercapaian KPI digunakan sebagai umpan balik (feedback) atau
                            referensi dalam penyusunan Rencana Strategis periode berikutnya.
                        </label>
                    </div>
                </div>
                @error('indikator12')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>
