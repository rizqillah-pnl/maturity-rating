<div class="card">
    <div class="card-header">
        <h2 class="card-title" style="font-weight: 600">Formulir KI.4 - Customer Focus</h2>
    </div>
    <div id="button-datatable"></div>
    <div class="card-body">
        <div class="form-tambah">
            <div class="row mb-3">
                <label class="col-12 form-label">
                    KI.4.1 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator41" id="indikator411"
                            {{ count($inputan) > 0 ? '' : 'checked' }}
                            {{ $inputan['indikator41'] == 1 ? 'checked' : '' }} value="1">
                        <label class="form-check-label" for="indikator411">
                            Organisasi setidaknya telah melakukan proses pengelolaan layanan publik secara ad-hoc.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator41" id="indikator412"
                            {{ $inputan['indikator41'] == 2 ? 'checked' : '' }} value="2">
                        <label class="form-check-label" for="indikator412">
                            Organisasi setidaknya telah melakukan
                            proses pengelolaan layanan publik
                            secara rutin.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator41" id="indikator413"
                            {{ $inputan['indikator41'] == 3 ? 'checked' : '' }} value="3">
                        <label class="form-check-label" for="indikator413">
                            Organisasi setidaknya telah
                            mendefinisikan seluruh proses
                            pengelolaan layanan publik dalam
                            bentuk prosedur standar serta Organisasi setidaknya memiliki
                            prosedur baku dan metode dalam
                            mengukur efektivitas layanan publik, revenue management, dan KPI
                            Layanan serta Organisasi setidaknya memiliki
                            prosedur baku dalam menanggulangi
                            service recovery, keluhan dan
                            feedback dari masyarakat.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator41" id="indikator414"
                            {{ $inputan['indikator41'] == 4 ? 'checked' : '' }} value="4">
                        <label class="form-check-label" for="indikator414">
                            Organisasi setidaknya melakukan
                            analisis tren dan output yang
                            dihasilkan dalam memberikan layanan
                            publik berdasarkan efektivitas layanan
                            maupun revenue management.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator41" id="indikator415"
                            {{ $inputan['indikator41'] == 5 ? 'checked' : '' }} value="5">
                        <label class="form-check-label" for="indikator415">
                            Organisasi setidaknya menanamkan
                            budaya inovasi untuk memastikan
                            layanan publik yang diberikan kepada
                            masyarakat sesuai dengan tren terkini.
                        </label>
                    </div>
                </div>
                @error('indikator41')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    KI.4.2 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator42" id="indikator421"
                            {{ count($inputan) > 0 ? '' : 'checked' }}
                            {{ $inputan['indikator42'] == 1 ? 'checked' : '' }} value="1">
                        <label class="form-check-label" for="indikator421">
                            Organisasi setidaknya telah melakukan
                            inventarisasi isu atau keluhan layanan
                            publik secara informal.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator42" id="indikator422"
                            {{ $inputan['indikator42'] == 2 ? 'checked' : '' }} value="2">
                        <label class="form-check-label" for="indikator422">
                            Organisasi setidaknya telah melakukan
                            inventarisasi isu atau keluhan layanan
                            publik secara formal, di mana terdapat
                            kebijakan dalam menanggulangi
                            service recovery, keluhan, dan
                            feedback dari masyarakat.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator42" id="indikator423"
                            {{ $inputan['indikator42'] == 3 ? 'checked' : '' }} value="3">
                        <label class="form-check-label" for="indikator423">
                            Organisasi setidaknya memiliki metode
                            dalam pengukuran efektivitas layanan
                            publik meskipun belum
                            terstandardisasi.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator42" id="indikator424"
                            {{ $inputan['indikator42'] == 4 ? 'checked' : '' }} value="4">
                        <label class="form-check-label" for="indikator424">
                            Organisasi setidaknya memiliki
                            sistem/aplikasi/ERP dalam merespon
                            keluhan masyarakat yang terintegrasi
                            dengan dashboard monitoring kinerja
                            organisasi secara keseluruhan.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator42" id="indikator425"
                            {{ $inputan['indikator42'] == 5 ? 'checked' : '' }} value="5">
                        <label class="form-check-label" for="indikator425">
                            Organisasi mengembangkan
                            sistem/aplikasi/ERP sesuai tren terkini
                            dalam merespon keluhan masyarakat
                            yang terintegrasi dengan
                            ERP/Customer Relationship
                            Management support.
                        </label>
                    </div>
                </div>
                @error('indikator42')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    KI.4.3 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator43" id="indikator431"
                            {{ count($inputan) > 0 ? '' : 'checked' }}
                            {{ $inputan['indikator43'] == 1 ? 'checked' : '' }} value="1">
                        <label class="form-check-label" for="indikator431">
                            Organisasi setidaknya telah merespon
                            keluhan masyarakat secara manual.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator43" id="indikator432"
                            {{ $inputan['indikator43'] == 2 ? 'checked' : '' }} value="2">
                        <label class="form-check-label" for="indikator432">
                            Organisasi setidaknya telah
                            mendefinisikan visi dan misi
                            penyediaan layanan publik kepada
                            masyarakat.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator43" id="indikator433"
                            {{ $inputan['indikator43'] == 3 ? 'checked' : '' }} value="3">
                        <label class="form-check-label" for="indikator433">
                            Organisasi setidaknya memiliki
                            sistem/aplikasi/ERP dalam merespon
                            keluhan masyarakat, meskipun belum
                            terintegrasi secara penuh dengan
                            dashboard monitoring kinerja
                            organisasi.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator43" id="indikator434"
                            {{ $inputan['indikator43'] == 4 ? 'checked' : '' }} value="4">
                        <label class="form-check-label" for="indikator434">
                            Organisasi setidaknya memiliki
                            sistem/aplikasi/ERP untuk memantau
                            Key Performance Indicator pelayanan
                            publik.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator43" id="indikator435"
                            {{ $inputan['indikator43'] == 5 ? 'checked' : '' }} value="5">
                        <label class="form-check-label" for="indikator435">
                            Organisasi telah memiliki
                            sistem/aplikasi/ERP untuk memantau
                            Key Performance Indicator pelayanan
                            publik yang terintegrasi dengan sistem
                            pengendalian internal.
                        </label>
                    </div>
                </div>
                @error('indikator43')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>
