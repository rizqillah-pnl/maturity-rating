<div class="card">
    <div class="card-header">
        <h2 class="card-title">Formulir KI.2 - Proses Bisnis</h2>
    </div>
    <div id="button-datatable"></div>
    <div class="card-body">
        <div class="form-tambah">
            <div class="row mb-3">
                <label class="col-12 form-label">
                    KI.2.1 Indikator Initial <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_initial2"
                            id="indikator_initial21" checked>
                        <label class="form-check-label" for="indikator_initial21">
                            Proses bisnis pada organisasi setidaknya telah dikelola secara ad hoc.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_initial2"
                            id="indikator_initial22">
                        <label class="form-check-label" for="indikator_initial22">
                            Panduan dalam melaksanakan proses bisnis dan peningkatan kualitas layanan setidaknya
                            dilakukan secara informal.
                        </label>
                    </div>
                </div>
                @error('indikator_initial2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    KI.2.2 Indikator Managed <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_managed2"
                            id="indikator_managed21" checked>
                        <label class="form-check-label" for="indikator_managed21">
                            Organisasi setidaknya memiliki arahan dari manajemen eksekutif, rencana strategis, serta
                            ketersediaan anggaran untuk menunjang kegiatan operasional.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_managed2"
                            id="indikator_managed22">
                        <label class="form-check-label" for="indikator_managed22">
                            Organisasi setidaknya telah mengelola layanan dan produk dari pihak ketiga untuk memenuhi
                            kebutuhan internal maupun eksternal organisasi.
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
                    KI.2.3 Indikator Defined <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_defined2"
                            id="indikator_defined21" checked>
                        <label class="form-check-label" for="indikator_defined21">
                            Seluruh proses bisnis organisasi telah didefinisikan dalam prosedur baku yang dilengkapi
                            dengan tujuan, input, proses, output, dan process owner.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_defined2"
                            id="indikator_defined22">
                        <label class="form-check-label" for="indikator_defined22">
                            Organisasi setidaknya mampu mengelola barang dan jasa yang diberikan kepada publik. Pada
                            level ini, organisasi dapat mengelola infrastruktur, persediaan, dan sumber daya lainnya
                            untuk memastikan layanan yang diberikan kepada masyarakat berkualitas baik.
                        </label>
                    </div>
                </div>
                @error('indikator_defined2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    KI.2.4 Indikator Predicatable <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_predicatable2"
                            id="indikator_predicatable21" checked>
                        <label class="form-check-label" for="indikator_predicatable21">
                            Organisasi setidaknya mampu memprediksi output yang dihasilkan untuk selanjutnya digunakan
                            sebagai basis dalam meningkatkan kinerja, kualitas layanan, cycle time, serta memprediksi
                            pendapatan organisasi.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_predicatable2"
                            id="indikator_predicatable22">
                        <label class="form-check-label" for="indikator_predicatable22">
                            Organisasi setidaknya memiliki manajemen database, baseline, dan analisis tren output
                            organisasi.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_predicatable2"
                            id="indikator_predicatable23">
                        <label class="form-check-label" for="indikator_predicatable23">
                            Organisasi setidaknya mengintegrasikan dan meningkatkan efektivitas serta efisiensi proses
                            bisnis melalui kolaborasi lintas unit.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_predicatable2"
                            id="indikator_predicatable24">
                        <label class="form-check-label" for="indikator_predicatable24">
                            Organisasi telah mengidentifikasi isu atau potensi risiko penurunan kinerja yang dapat
                            diukur secara kuantitatif.
                        </label>
                    </div>
                </div>
                @error('indikator_predicatable2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    KI.2.5 Indikator Optimizing <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_optimizing2"
                            id="indikator_optimizing21" checked>
                        <label class="form-check-label" for="indikator_optimizing21">
                            Organisasi setidaknya memiliki improvement dan sustainability planning dalam meningkatkan
                            kinerja organisasi secara keseluruhan dalam jangka panjang.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator_optimizing2"
                            id="indikator_optimizing22">
                        <label class="form-check-label" for="indikator_optimizing22">
                            Organisasi telah melakukan analisis terhadap stakeholder feedback untuk mengidentifikasi
                            potensi perbaikan kinerja layanan proses bisnis organisasi.
                        </label>
                    </div>
                </div>
                @error('indikator_optimizing2')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>
