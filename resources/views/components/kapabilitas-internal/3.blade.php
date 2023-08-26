<div class="card">
    <div class="card-header">
        <h2 class="card-title">Formulir KI.3 - Teknologi</h2>
    </div>
    <div id="button-datatable"></div>
    <div class="card-body">
        <div class="form-tambah">
            <div class="row mb-3">
                <label class="col-12 form-label">
                    KI.3.1 Indikator Initial <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_initial3"
                            id="indikator_initial31" checked>
                        <label class="form-check-label" for="indikator_initial31">
                            Organisasi setidaknya telah melakukan manajemen layanan TI secara ad-hoc.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_initial3"
                            id="indikator_initial32">
                        <label class="form-check-label" for="indikator_initial32">
                            Organisasi setidaknya memiliki satu proses/aktivitas operasional day-to-day yang didukung
                            oleh sistem.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_initial3"
                            id="indikator_initial33">
                        <label class="form-check-label" for="indikator_initial33">
                            Organisasi setidaknya telah melakukan identifikasi isu TI dan penyelesaiannya secara
                            informal.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_initial3"
                            id="indikator_initial34">
                        <label class="form-check-label" for="indikator_initial34">
                            Organisasi setidaknya memiliki tata kelola TI untuk mendukung technical focus.
                        </label>
                    </div>
                </div>
                @error('indikator_initial3')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    KI.3.2 Indikator Managed <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_managed2"
                            id="indikator_managed21" checked>
                        <label class="form-check-label" for="indikator_managed21">
                            Organisasi setidaknya telah melakukan manajemen layanan TI secara rutin, di mana organisasi
                            telah memiliki visi dan misi dalam mengelola TI.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_managed2"
                            id="indikator_managed22">
                        <label class="form-check-label" for="indikator_managed22">
                            Organisasi setidaknya memiliki beberapa/sebagian proses/aktivitas operasional day-to-day
                            yang didukung oleh sistem.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_managed2"
                            id="indikator_managed23">
                        <label class="form-check-label" for="indikator_managed23">
                            Organisasi setidaknya telah mengidentifikasi proses bisnis yang membutuhkan dukungan TI.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_managed2"
                            id="indikator_managed24">
                        <label class="form-check-label" for="indikator_managed24">
                            Sebagian tata kelola TI setidaknya telah dipusatkan pada customer/service focus.
                        </label>
                    </div>
                </div>
                @error('indikator_managed2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    KI.3.3 Indikator Defined <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_defined3"
                            id="indikator_defined31" checked>
                        <label class="form-check-label" for="indikator_defined31">
                            Seluruh proses bisnis yang berkaitan dengan tata kelola TI telah didefinisikan dalam
                            prosedur baku yang dilengkapi dengan tujuan, input, proses, output, dan process owner.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_defined3"
                            id="indikator_defined32">
                        <label class="form-check-label" for="indikator_defined32">
                            Sebagian day-to-day aktivitas operasional yang berhubungan dengan TI dikelola menggunakan
                            sistem yang terotomatisasi.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_defined3"
                            id="indikator_defined33">
                        <label class="form-check-label" for="indikator_defined33">
                            Tata kelola TI telah bersifat proaktif, di mana organisasi mampu mengidentifikasi risiko TI,
                            melakukan investigasi serta recovery plan atas isu TI.
                        </label>
                    </div>
                </div>
                @error('indikator_defined3')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    KI.3.4 Indikator Predicatable <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_predicatable3"
                            id="indikator_predicatable31" checked>
                        <label class="form-check-label" for="indikator_predicatable31">
                            Seluruh proses bisnis yang berkaitan dengan tata kelola TI mampu menghasilkan output yang
                            bersifat standar. Organisasi mampu mengidentifikasi risiko TI secara cepat dan melakukan
                            audit TI secara berkala.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_predicatable3"
                            id="indikator_predicatable32">
                        <label class="form-check-label" for="indikator_predicatable32">
                            Organisasi memiliki dana investasi TI untuk memastikan kinerja dapat dikelola secara optimal
                            dan kualitas layanan TI terus meningkat.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_predicatable3"
                            id="indikator_predicatable33">
                        <label class="form-check-label" for="indikator_predicatable33">
                            Day-to-day aktivitas operasional telah terintegrasi secara penuh melalui automation tools.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_predicatable3"
                            id="indikator_predicatable34">
                        <label class="form-check-label" for="indikator_predicatable34">
                            Organisasi telah menindaklanjuti feedback terkait tata kelola TI berdasarkan hasil audit
                            kinerja TI.
                        </label>
                    </div>
                </div>
                @error('indikator_predicatable3')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    KI.3.5 Indikator Optimizing <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_optimizing3"
                            id="indikator_optimizing31" checked>
                        <label class="form-check-label" for="indikator_optimizing31">
                            Organisasi secara aktif mengidentifikasi peluang inovasi dalam manajemen TI untuk mendukung
                            continuous improvement.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_optimizing3"
                            id="indikator_optimizing32">
                        <label class="form-check-label" for="indikator_optimizing32">
                            Service Governance TI organisasi telah mencakup pengelolaan atas relationship management
                            pengguna TI antar unit kerja maupun dengan pihak ketiga.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_optimizing3"
                            id="indikator_optimizing33">
                        <label class="form-check-label" for="indikator_optimizing33">
                            Organisasi telah melakukan analisis terhadap stakeholder feedback untuk mengidentifikasi
                            potensi perbaikan kinerja layanan TI.
                        </label>
                    </div>
                </div>
                @error('indikator_optimizing3')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>
