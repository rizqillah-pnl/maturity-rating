<div class="card">
    <div class="card-header">
        <h2 class="card-title">Formulir KI.1 - Sumber Daya Manusia</h2>
    </div>
    <div id="button-datatable"></div>
    <div class="card-body">
        <div class="form-tambah">
            <div class="row mb-3">
                <label class="col-12 form-label">
                    KI.1.1 Indikator Initial <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_initial1"
                            id="indikator_initial11" checked>
                        <label class="form-check-label" for="indikator_initial11">
                            Organisasi setidaknya telah melakukan pengelolaan SDM secara ad-hoc dan bersifat
                            administratif
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_initial1"
                            id="indikator_initial12">
                        <label class="form-check-label" for="indikator_initial12">
                            Organisasi setidaknya telah mendefinisikan peran dan tanggungjawab SDM secara lisan atau
                            informal.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_initial1"
                            id="indikator_initial13">
                        <label class="form-check-label" for="indikator_initial13">
                            Organisasi setidaknya telah memberikan pelatihan kepada SDM secara ad-hoc.
                        </label>
                    </div>
                </div>
                @error('indikator_initial1')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    KI.1.2 Indikator Managed <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_managed1"
                            id="indikator_managed11" checked>
                        <label class="form-check-label" for="indikator_managed11">
                            Proses rekruitmen SDM/tenaga kerja telah sesuai dengan kualifikasi yang dibutuhkan
                            organisasi.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_managed1"
                            id="indikator_managed12">
                        <label class="form-check-label" for="indikator_managed12">
                            Organisasi setidaknya telah mendefinisikan peran dan tanggungjawab SDM dalam bentuk job
                            description.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_managed1"
                            id="indikator_managed13">
                        <label class="form-check-label" for="indikator_managed13">
                            Organisasi setidaknya telah memberikan pelatihan kepada SDM secara rutin sesuai dengan
                            kebutuhan organisasi.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_managed1"
                            id="indikator_managed14">
                        <label class="form-check-label" for="indikator_managed14">
                            Organisasi setidaknya telah menyediakan fasilitas dasar untuk mendukung kegiatan operasional
                            dayto-day SDM (seperti: email, dan sebagainya).
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_managed1"
                            id="indikator_managed15">
                        <label class="form-check-label" for="indikator_managed15">
                            Organisasi setidaknya telah melakukan penyesuaian kompensasi SDM sesuai dengan target atau
                            capaian kinerja.
                        </label>
                    </div>
                </div>
                @error('indikator_managed1')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    KI.1.3 Indikator Defined <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_defined1"
                            id="indikator_defined11" checked>
                        <label class="form-check-label" for="indikator_defined11">
                            Organisasi setidaknya telah mendefinisikan analisis kapabilitas SDM untuk mengukur beban
                            kerja, kompetensi, dan pengetahuan SDM dalam prosedur baku.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_defined1"
                            id="indikator_defined12">
                        <label class="form-check-label" for="indikator_defined12">
                            Organisasi telah melakukan pengembangan kompetensi SDM secara konsisten melalui program
                            pengembangan karir.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_defined1"
                            id="indikator_defined13">
                        <label class="form-check-label" for="indikator_defined13">
                            Organisasi telah menerapkan workgroup development yang setidaknya mencakup penyediaan
                            program kerja untuk mendorong penugasan lintas unit.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_defined1"
                            id="indikator_defined14">
                        <label class="form-check-label" for="indikator_defined14">
                            Organisasi telah menanamkan budaya partisipatoris setidaknya dengan melibatkan tenaga kerja
                            dalam proses pengambilan keputusan organisasi.
                        </label>
                    </div>
                </div>
                @error('indikator_defined1')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    KI.1.4 Indikator Predicatable <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_predicatable1"
                            id="indikator_predicatable11" checked>
                        <label class="form-check-label" for="indikator_predicatable11">
                            Seluruh SDM organisasi telah mampu berkolaborasi secara lintas unit meskipun memiliki job
                            description yang berbeda.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_predicatable1"
                            id="indikator_predicatable12">
                        <label class="form-check-label" for="indikator_predicatable12">
                            Organisasi telah melakukan analisis kinerja SDM untuk memprediksi tren output masing-masing
                            pegawai.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_predicatable1"
                            id="indikator_predicatable13">
                        <label class="form-check-label" for="indikator_predicatable13">
                            Organisasi telah menerapkan program mentoring SDM yang setidaknya dalam bentuk transfer
                            knowledge maupun sharing session secara individu maupun kelompok.
                        </label>
                    </div>
                </div>
                @error('indikator_predicatable1')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    KI.1.5 Indikator Optimizing <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_optimizing1"
                            id="indikator_optimizing11" checked>
                        <label class="form-check-label" for="indikator_optimizing11">
                            Organisasi selalu memberikan dukungan kepada SDM untuk melaksanakan penugasan berbasis
                            inovasi.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_optimizing1"
                            id="indikator_optimizing12">
                        <label class="form-check-label" for="indikator_optimizing12">
                            Organisasi telah melakukan identifikasi dan evaluasi peluang inovasi yang dibutuhkan dalam
                            rangka mendorong pertumbuhan organisasi.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_optimizing1"
                            id="indikator_optimizing13">
                        <label class="form-check-label" for="indikator_optimizing13">
                            Organisasi memiliki kelompok kerja khusus yang bertugas untuk melakukan penelitian atas
                            kebutuhan human resource sustainability dalam jangka panjang.
                        </label>
                    </div>
                </div>
                @error('indikator_optimizing1')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>
