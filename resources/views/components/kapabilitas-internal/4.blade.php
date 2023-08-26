<div class="card">
    <div class="card-header">
        <h2 class="card-title">Formulir KI.4 - Customer Focus</h2>
    </div>
    <div id="button-datatable"></div>
    <div class="card-body">
        <div class="form-tambah">
            <div class="row mb-3">
                <label class="col-12 form-label">
                    KI.4.1 Indikator Initial <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_initial4"
                            id="indikator_initial41" checked>
                        <label class="form-check-label" for="indikator_initial41">
                            Organisasi setidaknya telah melakukan proses pengelolaan layanan publik secara ad-hoc.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_initial4"
                            id="indikator_initial42">
                        <label class="form-check-label" for="indikator_initial42">
                            Organisasi setidaknya telah melakukan inventarisasi isu atau keluhan layanan publik secara
                            informal.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_initial4"
                            id="indikator_initial43">
                        <label class="form-check-label" for="indikator_initial43">
                            Organisasi setidaknya telah merespon keluhan masyarakat secara manual.
                        </label>
                    </div>
                </div>
                @error('indikator_initial4')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    KI.4.2 Indikator Managed <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_managed4"
                            id="indikator_managed41" checked>
                        <label class="form-check-label" for="indikator_managed41">
                            Organisasi setidaknya telah melakukan proses pengelolaan layanan publik secara rutin.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_managed4"
                            id="indikator_managed42">
                        <label class="form-check-label" for="indikator_managed42">
                            Organisasi setidaknya telah melakukan inventarisasi isu atau keluhan layanan publik secara
                            formal, di mana terdapat kebijakan dalam menanggulangi service recovery, keluhan, dan
                            feedback dari masyarakat.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_managed4"
                            id="indikator_managed43">
                        <label class="form-check-label" for="indikator_managed43">
                            Organisasi setidaknya telah mendefinisikan visi dan misi penyediaan layanan publik kepada
                            masyarakat.
                        </label>
                    </div>
                </div>
                @error('indikator_managed4')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    KI.4.3 Indikator Defined <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_defined4"
                            id="indikator_defined41" checked>
                        <label class="form-check-label" for="indikator_defined41">
                            Organisasi setidaknya telah mendefinisikan seluruh proses pengelolaan layanan publik dalam
                            bentuk prosedur standar.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_defined4"
                            id="indikator_defined42">
                        <label class="form-check-label" for="indikator_defined42">
                            Organisasi setidaknya memiliki prosedur baku dan metode dalam mengukur efektivitas layanan
                            publik, revenue management, dan KPI Layanan.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_defined4"
                            id="indikator_defined43">
                        <label class="form-check-label" for="indikator_defined43">
                            Organisasi setidaknya memiliki prosedur baku dalam menanggulangi service recovery, keluhan
                            dan feedback dari masyarakat.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_defined4"
                            id="indikator_defined44">
                        <label class="form-check-label" for="indikator_defined44">
                            Organisasi setidaknya memiliki metode dalam pengukuran efektivitas layanan publik meskipun
                            belum terstandardisasi.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_defined4"
                            id="indikator_defined45">
                        <label class="form-check-label" for="indikator_defined45">
                            Organisasi setidaknya memiliki sistem/aplikasi/ERP dalam merespon keluhan masyarakat,
                            meskipun belum terintegrasi secara penuh dengan dashboard monitoring kinerja organisasi.
                        </label>
                    </div>
                </div>
                @error('indikator_defined4')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    KI.4.4 Indikator Predicatable <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_predicatable4"
                            id="indikator_predicatable41" checked>
                        <label class="form-check-label" for="indikator_predicatable41">
                            Seluruh proses bisnis yang berkaitan dengan tata kelola TI mampu menghasilkan output yang
                            bersifat standar. Organisasi mampu mengidentifikasi risiko TI secara cepat dan melakukan
                            audit TI secara berkala.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_predicatable4"
                            id="indikator_predicatable42">
                        <label class="form-check-label" for="indikator_predicatable42">
                            Organisasi memiliki dana investasi TI untuk memastikan kinerja dapat dikelola secara optimal
                            dan kualitas layanan TI terus meningkat.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_predicatable4"
                            id="indikator_predicatable43">
                        <label class="form-check-label" for="indikator_predicatable43">
                            Day-to-day aktivitas operasional telah terintegrasi secara penuh melalui automation tools.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_predicatable4"
                            id="indikator_predicatable43">
                        <label class="form-check-label" for="indikator_predicatable43">
                            Organisasi telah menindaklanjuti feedback terkait tata kelola TI berdasarkan hasil audit
                            kinerja TI.
                        </label>
                    </div>
                </div>
                @error('indikator_predicatable4')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    KI.4.5 Indikator Optimizing <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_optimizing4"
                            id="indikator_optimizing41" checked>
                        <label class="form-check-label" for="indikator_optimizing41">
                            Organisasi secara aktif mengidentifikasi peluang inovasi dalam manajemen TI untuk mendukung
                            continuous improvement.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_optimizing4"
                            id="indikator_optimizing42">
                        <label class="form-check-label" for="indikator_optimizing42">
                            Service Governance TI organisasi telah mencakup pengelolaan atas relationship management
                            pengguna TI antar unit kerja maupun dengan pihak ketiga.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_optimizing4"
                            id="indikator_optimizing42">
                        <label class="form-check-label" for="indikator_optimizing42">
                            Organisasi telah melakukan analisis terhadap stakeholder feedback untuk mengidentifikasi
                            potensi perbaikan kinerja layanan TI.
                        </label>
                    </div>
                </div>
                @error('indikator_optimizing4')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>
