<div class="card">
    <div class="card-header">
        <h2 class="card-title" style="font-weight: 600">Formulir KI.3 - Teknologi</h2>
    </div>
    <div id="button-datatable"></div>
    <div class="card-body">
        <div class="form-tambah">
            <div class="row mb-3">
                <label class="col-12 form-label">
                    KI.3.1 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator31" id="indikator311" checked
                            value="1">
                        <label class="form-check-label" for="indikator311">
                            Organisasi setidaknya telah melakukan manajemen layanan TI secara ad-hoc.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator31" id="indikator312"
                            value="2">
                        <label class="form-check-label" for="indikator312">
                            Organisasi setidaknya telah melakukan
                            manajemen layanan TI secara rutin, di
                            mana organisasi telah memiliki visi dan
                            misi dalam mengelola TI.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator31" id="indikator313"
                            value="3">
                        <label class="form-check-label" for="indikator313">
                            Seluruh proses bisnis yang berkaitan
                            dengan tata kelola TI telah
                            didefinisikan dalam prosedur baku
                            yang dilengkapi dengan tujuan, input,
                            proses, output, dan process owner.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator31" id="indikator314"
                            value="4">
                        <label class="form-check-label" for="indikator314">
                            Seluruh proses bisnis yang berkaitan
                            dengan tata kelola TI mampu
                            menghasilkan output yang bersifat
                            standar. Organisasi mampu
                            mengidentifikasi risiko TI secara cepat
                            dan melakukan audit TI secara berkala.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator31" id="indikator315"
                            value="5">
                        <label class="form-check-label" for="indikator315">
                            Organisasi secara aktif
                            mengidentifikasi peluang inovasi
                            dalam manajemen TI untuk
                            mendukung continuous improvement.
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
                    KI.3.2 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator32" id="indikator321" checked
                            value="1">
                        <label class="form-check-label" for="indikator321">
                            Organisasi setidaknya memiliki satu
                            proses/aktivitas operasional day-to-day
                            yang didukung oleh sistem.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator32" id="indikator322"
                            value="2">
                        <label class="form-check-label" for="indikator322">
                            Organisasi setidaknya memiliki
                            beberapa/sebagian proses/aktivitas
                            operasional day-to-day yang didukung
                            oleh sistem.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator32" id="indikator323"
                            value="3">
                        <label class="form-check-label" for="indikator323">
                            Sebagian day-to-day aktivitas
                            operasional yang berhubungan dengan
                            TI dikelola menggunakan sistem yang
                            terotomatisasi.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator32" id="indikator324"
                            value="4">
                        <label class="form-check-label" for="indikator324">
                            Organisasi memiliki dana investasi TI
                            untuk memastikan kinerja dapat
                            dikelola secara optimal dan kualitas
                            layanan TI terus meningkat.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator32" id="indikator325"
                            value="5">
                        <label class="form-check-label" for="indikator325">
                            Service Governance TI organisasi telah
                            mencakup pengelolaan atas
                            relationship management pengguna TI
                            antar unit kerja maupun dengan pihak
                            ketiga.
                        </label>
                    </div>
                </div>
                @error('indikator32')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    KI.3.3 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator33" id="indikator331" checked
                            value="1">
                        <label class="form-check-label" for="indikator331">
                            Organisasi setidaknya telah melakukan
                            identifikasi isu TI dan penyelesaiannya
                            secara informal.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator33" id="indikator332"
                            value="2">
                        <label class="form-check-label" for="indikator332">
                            Organisasi setidaknya telah
                            mengidentifikasi proses bisnis yang
                            membutuhkan dukungan TI.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator33" id="indikator333"
                            value="3">
                        <label class="form-check-label" for="indikator333">
                            Tata kelola TI telah bersifat proaktif, di
                            mana organisasi mampu
                            mengidentifikasi risiko TI, melakukan
                            investigasi serta recovery plan atas isu
                            TI.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator33" id="indikator334"
                            value="4">
                        <label class="form-check-label" for="indikator334">
                            Day-to-day aktivitas operasional telah
                            terintegrasi secara penuh melalui
                            automation tools.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator33" id="indikator335"
                            value="5">
                        <label class="form-check-label" for="indikator335">
                            Organisasi telah melakukan analisis
                            terhadap stakeholder feedback untuk
                            mengidentifikasi potensi perbaikan
                            kinerja layanan TI.
                        </label>
                    </div>
                </div>
                @error('indikator33')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    KI.3.4 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator34" id="indikator341" checked
                            value="1">
                        <label class="form-check-label" for="indikator341">
                            Organisasi setidaknya memiliki tata
                            kelola TI untuk mendukung technical
                            focus.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator34" id="indikator342"
                            value="2">
                        <label class="form-check-label" for="indikator342">
                            Sebagian tata kelola TI setidaknya
                            telah dipusatkan pada
                            customer/service focus.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator34" id="indikator343"
                            value="4">
                        <label class="form-check-label" for="indikator343">
                            Organisasi telah menindaklanjuti
                            feedback terkait tata kelola TI
                            berdasarkan hasil audit kinerja TI.
                        </label>
                    </div>
                </div>
                @error('indikator34')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>
