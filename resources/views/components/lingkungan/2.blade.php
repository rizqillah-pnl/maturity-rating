<div class="card">
    <div class="card-header">
        <h2 class="card-title" style="font-weight: 600">Formulir LI.2 - Penggunaan Sumber Daya</h2>
    </div>
    <div id="button-datatable"></div>
    <div class="card-body">
        <div class="form-tambah">
            <div class="row mb-3">
                <label class="col-12 form-label">
                    LI.2.1 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator21" id="indikator211" checked
                            value="1">
                        <label class="form-check-label" for="indikator211">
                            Organisasi setidaknya telah memiliki
                            kesadaran terkait pentingnya efisiensi
                            penggunaan sumber daya dalam
                            melakukan kegiatan operasionalnya.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator21" id="indikator212"
                            value="2">
                        <label class="form-check-label" for="indikator212">
                            Kegiatan yang bertujuan untuk
                            efisiensi penggunaan sumber daya
                            setidaknya telah didefinisikan
                            meskipun belum terdapat standar
                            yang baku, serta belum dilakukan
                            secara berkala (contoh: pelaporan
                            penggunaan sumber daya dilakukan 1
                            tahun sekali).
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator21" id="indikator213"
                            value="3">
                        <label class="form-check-label" for="indikator213">
                            Kegiatan efisiensi penggunaan sumber
                            daya setidaknya telah
                            mempertimbangkan isu lingkungan
                            terkini dalam skala nasional dan
                            internasional, analisis internal dan
                            eksternal, serta berbagai riset.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator21" id="indikator214"
                            value="4">
                        <label class="form-check-label" for="indikator214">
                            Penyusunan metode pengukuran atas
                            penggunaan sumber daya sudah
                            mempertimbangkan seluruh faktor dan
                            menggunakan standar internasional
                            dalam penggunaan sumber daya.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator21" id="indikator215"
                            value="5">
                        <label class="form-check-label" for="indikator215">
                            Kegiatan efisiensi penggunaan sumber
                            daya telah memenuhi standar
                            internasional ISO 14001 terkait sistem
                            manajemen lingkungan yang juga
                            mencakup penggunaan sumber daya
                            untuk mencapai eko-efisiensi.
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
                    LI.2.2 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator22" id="indikator221" checked
                            value="1">
                        <label class="form-check-label" for="indikator221">
                            Kegiatan yang bertujuan untuk
                            efisiensi penggunaan sumber daya
                            setidaknya telah dilakukan secara adhoc, atau setidaknya telah dilakukan
                            berdasarkan permintaan dari pihak
                            internal maupun eksternal.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator22" id="indikator222"
                            value="2">
                        <label class="form-check-label" for="indikator222">
                            Dokumentasi yang berkaitan dengan
                            proses efisiensi sumber daya setidaknya telah bersifat formal dan
                            sudah konsisten.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator22" id="indikator223"
                            value="3">
                        <label class="form-check-label" for="indikator223">
                            Standar baku dalam melakukan
                            kegiatan efisiensi penggunaan sumber
                            daya setidaknya telah tersedia.
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
                        <input class="form-check-input" type="radio" name="indikator22" id="indikator224"
                            value="4">
                        <label class="form-check-label" for="indikator224">
                            Standar baku dalam melakukan
                            kegiatan efisiensi penggunaan sumber
                            daya setidaknya telah menetapkan
                            proses penyusunan metode
                            pengukuran dampak lingkungan atas
                            penggunaan sumber daya. Proses
                            penyusunan metode pengukuran
                            tersebut setidaknya telah
                            mempertimbangkan penggunaan
                            standar internasional dalam
                            penggunaan sumber daya.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator22" id="indikator225"
                            value="5">
                        <label class="form-check-label" for="indikator225">
                            Kegiatan efisiensi penggunaan sumber
                            daya menjadi dasar organisasi dalam mengembangkan action plan untuk
                            mengatasi isu lingkungan yang
                            teridentifikasi dari kegiatan tersebut.
                        </label>
                    </div>
                </div>
                @error('indikator22')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    LI.2.3 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator23" id="indikator231" checked
                            value="1">
                        <label class="form-check-label" for="indikator231">
                            Dokumentasi yang berkaitan dengan
                            kegiatan efisiensi penggunaan sumber
                            daya setidaknya bersifat informal.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator23" id="indikator232"
                            value="2">
                        <label class="form-check-label" for="indikator232">
                            Identifikasi kebutuhan dari internal
                            dan eksternal BLU untuk keperluan
                            pelaksanaan aktivitas terkait efisiensi
                            penggunaan sumber daya setidaknya
                            sudah mulai dilakukan.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator23" id="indikator233"
                            value="3">
                        <label class="form-check-label" for="indikator233">
                            Kegiatan efisiensi penggunaan sumber
                            daya setidaknya telah dilakukan
                            secara berkala sesuai dengan standar
                            baku yang telah ditetapkan.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator23" id="indikator234"
                            value="4">
                        <label class="form-check-label" for="indikator234">
                            Terdapat aktivitas peninjauan dan
                            pengawasan oleh pejabat berwenang
                            atas penggunaan sumber daya.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator23" id="indikator235"
                            value="5">
                        <label class="form-check-label" for="indikator235">
                            Hasil dari pengukuran dampak
                            lingkungan dan action plan yang
                            disusun terkait penggunaan sumber
                            daya telah dipertimbangkan dalam
                            perumusan rencana strategis
                            organisasi.
                        </label>
                    </div>
                </div>
                @error('indikator23')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>
