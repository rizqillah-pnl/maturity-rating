<div class="card">
    <div class="card-header">
        <h2 class="card-title" style="font-weight: 600">Formulir KI.1 - Sumber Daya Manusia</h2>
    </div>
    <div id="button-datatable"></div>
    <div class="card-body">
        <div class="form-tambah">
            <div class="row mb-3">
                <label class="col-12 form-label">
                    KI.1.1 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator11" id="indikator111" checked
                            value="1">
                        <label class="form-check-label" for="indikator111">
                            Organisasi setidaknya telah melakukan pengelolaan SDM secara ad-hoc dan bersifat
                            administratif
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator11" id="indikator112"
                            value="2">
                        <label class="form-check-label" for="indikator112">
                            Proses rekruitmen SDM/tenaga kerja
                            telah sesuai dengan kualifikasi yang
                            dibutuhkan organisasi serta Organisasi setidaknya telah
                            mendefinisikan peran dan
                            tanggungjawab SDM dalam bentuk job
                            description.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator11" id="indikator113"
                            value="3">
                        <label class="form-check-label" for="indikator113">
                            Organisasi setidaknya telah
                            mendefinisikan analisis kapabilitas
                            SDM untuk mengukur beban kerja,
                            kompetensi, dan pengetahuan SDM
                            dalam prosedur baku serta Organisasi telah melakukan
                            pengembangan kompetensi SDM
                            secara konsisten melalui program
                            pengembangan karir.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator11"
                            id="indikator114"value="4">
                        <label class="form-check-label" for="indikator114">
                            Seluruh SDM organisasi telah mampu
                            berkolaborasi secara lintas unit
                            meskipun memiliki job description
                            yang berbeda.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator11"
                            id="indikator115"value="5">
                        <label class="form-check-label" for="indikator115">
                            Organisasi selalu memberikan
                            dukungan kepada SDM untuk
                            melaksanakan penugasan berbasis
                            inovasi.
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
                    KI.1.2 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator12" id="indikator121" checked
                            value="1">
                        <label class="form-check-label" for="indikator121">
                            Organisasi setidaknya telah
                            mendefinisikan peran dan
                            tanggungjawab SDM secara lisan atau
                            informal.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator12"
                            id="indikator122"value="2">
                        <label class="form-check-label" for="indikator122">
                            Organisasi setidaknya telah
                            memberikan pelatihan kepada SDM
                            secara rutin sesuai dengan kebutuhan
                            organisasi.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator12"
                            id="indikator123"value="3">
                        <label class="form-check-label" for="indikator123">
                            Organisasi telah menerapkan
                            workgroup development yang
                            setidaknya mencakup penyediaan
                            program kerja untuk mendorong
                            penugasan lintas unit.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator12"
                            id="indikator124"value="4">
                        <label class="form-check-label" for="indikator124">
                            Organisasi telah melakukan analisis
                            kinerja SDM untuk memprediksi tren
                            output masing-masing pegawai.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator12"
                            id="indikator125"value="5">
                        <label class="form-check-label" for="indikator125">
                            Organisasi telah melakukan identifikasi
                            dan evaluasi peluang inovasi yang
                            dibutuhkan dalam rangka mendorong
                            pertumbuhan organisasi.
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
                    KI.1.3 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator13" id="indikator131" checked
                            value="1">
                        <label class="form-check-label" for="indikator131">
                            Organisasi setidaknya telah
                            memberikan pelatihan kepada SDM
                            secara ad-hoc.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator13"
                            id="indikator132"value="2">
                        <label class="form-check-label" for="indikator132">
                            Organisasi setidaknya telah
                            menyediakan fasilitas dasar untuk
                            mendukung kegiatan operasional dayto-day SDM (seperti: email, dan
                            sebagainya) serta Organisasi setidaknya telah melakukan
                            penyesuaian kompensasi SDM sesuai
                            dengan target atau capaian kinerja.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator13"
                            id="indikator133"value="3">
                        <label class="form-check-label" for="indikator133">
                            Organisasi telah menanamkan budaya
                            partisipatoris setidaknya dengan
                            melibatkan tenaga kerja dalam proses
                            pengambilan keputusan organisasi.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator13"
                            id="indikator134"value="4">
                        <label class="form-check-label" for="indikator134">
                            Organisasi telah menerapkan program
                            mentoring SDM yang setidaknya dalam
                            bentuk transfer knowledge maupun
                            sharing session secara individu
                            maupun kelompok.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator13"
                            id="indikator135"value="5">
                        <label class="form-check-label" for="indikator135">
                            Organisasi memiliki kelompok kerja
                            khusus yang bertugas untuk
                            melakukan penelitian atas kebutuhan
                            human resource sustainability dalam
                            jangka panjang.
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
