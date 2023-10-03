<div class="card">
    <div class="card-header">
        <h2 class="card-title" style="font-weight: 600">Formulir IN.1 - Sumber Daya Manusia</h2>
    </div>
    <div class="card-body">
        <div class="form-tambah">
            <div class="row mb-3">
                <label class="col-12 form-label">
                    IN.1.1 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator11" id="indikator111"
                            {{ $inputan ? ($inputan['indikator11'] == 1 ? 'checked' : '') : '' }}
                            {{ count($inputan) > 0 ? '' : 'checked' }} value="1">
                        <label class="form-check-label" for="indikator111">
                            Organisasi setidaknya telah memiliki
                            kesadaran terkait pentingnya
                            keterlibatan pengguna layanan dalam
                            melakukan pengembangan inovasi
                            layanan organisasi.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator11" id="indikator112"
                            {{ $inputan ? ($inputan['indikator11'] == 2 ? 'checked' : '') : '' }} value="2">
                        <label class="form-check-label" for="indikator112">
                            Organisasi setidaknya telah melibatkan
                            pengguna layanan (internal BLU)
                            secara rutin dan informal, di mana
                            pengguna layanan (internal BLU) berperan aktif dalam memberikan
                            pendapat dan aspirasi dalam
                            pengembangan inovasi layanan.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator11" id="indikator113"
                            {{ $inputan ? ($inputan['indikator11'] == 3 ? 'checked' : '') : '' }} value="3">
                        <label class="form-check-label" for="indikator113">
                            Organisasi setidaknya telah melibatkan
                            pengguna layanan (internal dan
                            eksternal BLU) secara rutin dan
                            formal, di mana pengguna layanan
                            (internal dan eksternal BLU)
                            dikonsultasikan pada beberapa
                            tahapan pengembangan inovasi untuk
                            menyampaikan keinginan, persyaratan,
                            dan ide serta Organisasi setidaknya telah
                            mendefinisikan standar baku dan
                            prosedur formal dalam melakukan
                            proses inovasi yang memperlihatkan
                            keterlibatan pengguna layanan dalam
                            proses inovasi.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator11" id="indikator114"
                            {{ $inputan ? ($inputan['indikator11'] == 4 ? 'checked' : '') : '' }} value="4">
                        <label class="form-check-label" for="indikator114">
                            Organisasi setidaknya telah melibatkan
                            pengguna layanan (internal dan
                            eksternal BLU) secara rutin dan
                            formal, di mana pengguna layanan
                            (internal dan eksternal BLU) terlibat
                            pada setiap tahapan pengembangan
                            inovasi dan berperan sebagai codesigner yang berpengaruh dalam
                            pengembangan inovasi serta Terdapat action plan yang setidaknya
                            jelas dan terarah dalam merespon
                            aspirasi yang diterima dari pengguna
                            layanan.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator11" id="indikator115"
                            {{ $inputan ? ($inputan['indikator11'] == 5 ? 'checked' : '') : '' }} value="5">
                        <label class="form-check-label" for="indikator115">
                            Pengguna layanan berperan aktif
                            dalam end-to-end process
                            pengembangan inovasi layanan. Dalam
                            hal ini, pengguna layanan turut
                            berperan dalam pembuatan keputusan
                            inovasi (go or no-go atas inovasi suatu
                            produk/layanan) serta Terdapat partisipasi dan interaksi
                            dengan pengguna layanan yang
                            konstan melalui kerja sama untuk
                            menjadi co-designer dan co-producer
                            dalam melakukan continuous
                            improvement.
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
                    IN.1.2 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator12" id="indikator121"
                            {{ $inputan ? ($inputan['indikator12'] == 1 ? 'checked' : '') : '' }}
                            {{ count($inputan) > 0 ? '' : 'checked' }} value="1">
                        <label class="form-check-label" for="indikator121">
                            Organisasi setidaknya telah
                            melibatkan pengguna layanan dalam
                            melakukan proses inovasi secara adhoc dan informal.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator12" id="indikator122"
                            {{ $inputan ? ($inputan['indikator12'] == 2 ? 'checked' : '') : '' }} value="2">
                        <label class="form-check-label" for="indikator122">
                            Organisasi setidaknya telah
                            melibatkan pengguna layanan (internal
                            BLU) dalam menyusun persyaratan
                            dalam pengembangan proses inovasi.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator12" id="indikator123"
                            {{ $inputan ? ($inputan['indikator12'] == 3 ? 'checked' : '') : '' }} value="3">
                        <label class="form-check-label" for="indikator123">
                            Organisasi setidaknya telah menyusun
                            strategi keterlibatan pengguna
                            layanan dalam pengembangan inovasi
                            (contoh: jadwal keterlibatan pengguna
                            layanan, metode user involvement,
                            dan sebagainya) Keterlibatan pengguna layanan dalam
                            proses pengembangan inovasi sudah
                            diterapkan secara konsisten sesuai
                            dengan panduan yang telah
                            ditetapkan.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator12" id="indikator124"
                            {{ $inputan ? ($inputan['indikator12'] == 4 ? 'checked' : '') : '' }} value="4">
                        <label class="form-check-label" for="indikator124">
                            Organisasi telah menyusun strategi
                            keterlibatan pengguna layanan
                            setidaknya dengan pendekatan
                            statistik atau riset yang didesain untuk
                            mendapatkan aspirasi dan pendapat yang konkrit dalam pengembangan
                            inovasi.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator12" id="indikator125"
                            {{ $inputan ? ($inputan['indikator12'] == 5 ? 'checked' : '') : '' }} value="5">
                        <label class="form-check-label" for="indikator125">
                            Organisasi memiliki tools pendukung
                            yang mampu mendukung pelaksanaan
                            keterlibatan pengguna layanan (user
                            involvement) dalam pelaksanaan
                            proses inovasi
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
