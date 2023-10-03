<div class="card">
    <div class="card-header">
        <h2 class="card-title" style="font-weight: 600">Formulir LI.1 - Environmental Footprint Management</h2>
    </div>
    <div id="button-datatable"></div>
    <div class="card-body">
        <div class="form-tambah">
            <div class="row mb-3">
                <label class="col-12 form-label">
                    LI.1.1 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator11" id="indikator111"
                            {{ $inputan ? ($inputan['indikator11'] == 1 ? 'checked' : '') : '' }}
                            {{ count($inputan) > 0 ? '' : 'checked' }} value="1">
                        <label class="form-check-label" for="indikator111">
                            Organisasi setidaknya telah memiliki
                            kesadaran terkait pentingnya
                            pengelolaan environmental footprint
                            dalam menjalankan kegiatan
                            operasionalnya.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator11" id="indikator112"
                            {{ $inputan ? ($inputan['indikator11'] == 2 ? 'checked' : '') : '' }} value="2">
                        <label class="form-check-label" for="indikator112">
                            Kegiatan pengelolaan environmental
                            footprint setidaknya telah didefinisikan
                            meskipun belum terdapat standar
                            yang baku dan belum dilakukan secara
                            berkala (contoh: pelaporan
                            pengelolaan environmental footprint
                            dilakukan 1 tahun sekali).
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator11" id="indikator113"
                            {{ $inputan ? ($inputan['indikator11'] == 3 ? 'checked' : '') : '' }} value="3">
                        <label class="form-check-label" for="indikator113">
                            Kegiatan pengelolaan environmental
                            footprint oleh BLU setidaknya telah
                            mempertimbangkan isu lingkungan
                            terkini dalam skala nasional dan
                            internasional, analisis internal dan
                            eksternal, serta berbagai riset.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator11" id="indikator114"
                            {{ $inputan ? ($inputan['indikator11'] == 4 ? 'checked' : '') : '' }} value="4">
                        <label class="form-check-label" for="indikator114">
                            Kegiatan pengelolaan environmental
                            footprint oleh BLU setidaknya telah
                            memiliki proses pengukuran atas
                            aktivitas-aktivitas yang telah dilakukan
                            untuk mengetahui dampak dari
                            aktivitas tersebut.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator11" id="indikator115"
                            {{ $inputan ? ($inputan['indikator11'] == 5 ? 'checked' : '') : '' }} value="5">
                        <label class="form-check-label" for="indikator115">
                            Kegiatan pengelolaan environmental
                            footprint telah memenuhi standar
                            internasional ISO 14001 terkait sistem
                            manajemen lingkungan yang juga
                            mencakup pengelolaan dan
                            pengurangan limbah berbahaya.
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
                    LI.1.2 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator12" id="indikator121" checked
                            {{ $inputan ? ($inputan['indikator12'] == 1 ? 'checked' : '') : '' }}
                            {{ count($inputan) > 0 ? '' : 'checked' }} value="1">
                        <label class="form-check-label" for="indikator121">
                            Kegiatan pengelolaan environmental
                            footprint setidaknya telah dilakukan
                            secara ad-hoc atau setidaknya telah
                            dilakukan berdasarkan permintaan
                            dari pihak internal maupun eksternal.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator12" id="indikator122"
                            {{ $inputan ? ($inputan['indikator12'] == 2 ? 'checked' : '') : '' }} value="2">
                        <label class="form-check-label" for="indikator122">
                            Dokumentasi yang berkaitan dengan
                            kegiatan pengelolaan environmental footprint setidaknya telah bersifat
                            formal dan sudah konsisten.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator12" id="indikator123"
                            {{ $inputan ? ($inputan['indikator12'] == 3 ? 'checked' : '') : '' }} value="3">
                        <label class="form-check-label" for="indikator123">
                            Standar baku dalam melakukan
                            kegiatan pengelolaan environmental
                            footprint setidaknya telah tersedia.
                            Standar tersebut setidaknya telah
                            mempertimbangkan seluruh faktor,
                            mulai dari kebutuhan internal dan
                            eksternal hingga kebutuhan
                            dokumentasi.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator12" id="indikator124"
                            {{ $inputan ? ($inputan['indikator12'] == 4 ? 'checked' : '') : '' }} value="4">
                        <label class="form-check-label" for="indikator124">
                            Standar baku dalam melakukan
                            kegiatan pengelolaan environmental
                            footprint setidaknya telah menetapkan
                            proses penyusunan metode
                            pengukuran dampak lingkungan atas
                            pengelolaan environmental footprint.
                            Proses penyusunan metode
                            pengukuran tersebut setidaknya telah
                            mempertimbangkan penggunaan
                            standar internasional dalam
                            pengelolaan environmental footprint.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator12" id="indikator125"
                            {{ $inputan ? ($inputan['indikator12'] == 5 ? 'checked' : '') : '' }} value="5">
                        <label class="form-check-label" for="indikator125">
                            Kegiatan pengelolaan environmental
                            footprint menjadi dasar organisasi
                            dalam mengembangkan action plan
                            untuk mengatasi isu lingkungan yang
                            teridentifikasi dari kegiatan tersebut.
                        </label>
                    </div>
                </div>
                @error('indikator12')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    LI.1.3 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator13" id="indikator131" checked
                            {{ $inputan ? ($inputan['indikator13'] == 1 ? 'checked' : '') : '' }}
                            {{ count($inputan) > 0 ? '' : 'checked' }} value="1">
                        <label class="form-check-label" for="indikator131">
                            Dokumentasi yang berkaitan dengan
                            kegiatan pengelolaan environmental
                            footprint setidaknya bersifat informal.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator13" id="indikator132"
                            {{ $inputan ? ($inputan['indikator13'] == 2 ? 'checked' : '') : '' }} value="2">
                        <label class="form-check-label" for="indikator132">
                            Identifikasi kebutuhan dari internal
                            dan eksternal BLU untuk keperluan
                            pelaksanaan aktivitas terkait
                            pengelolaan environmental footprint
                            setidaknya sudah mulai dilakukan.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator13" id="indikator133"
                            {{ $inputan ? ($inputan['indikator13'] == 3 ? 'checked' : '') : '' }} value="3">
                        <label class="form-check-label" for="indikator133">
                            Kegiatan pengelolaan environmental
                            footprint setidaknya telah dilakukan
                            secara berkala sesuai dengan standar
                            baku yang telah ditetapkan.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator13" id="indikator134"
                            {{ $inputan ? ($inputan['indikator13'] == 4 ? 'checked' : '') : '' }} value="4">
                        <label class="form-check-label" for="indikator134">
                            Terdapat aktivitas peninjauan dan
                            pengawasan oleh pejabat berwenang
                            atas kegiatan pengelolaan
                            environmental footprint.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator13" id="indikator135"
                            {{ $inputan ? ($inputan['indikator13'] == 5 ? 'checked' : '') : '' }} value="5">
                        <label class="form-check-label" for="indikator135">
                            Hasil dari pengukuran dampak
                            lingkungan dan action plan yang
                            disusun terkait pengelolaan
                            environmental footprint telah
                            dipertimbangkan dalam perumusan
                            rencana strategis organisasi.
                        </label>
                    </div>
                </div>
                @error('indikator13')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>
