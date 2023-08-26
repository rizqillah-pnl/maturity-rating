<div class="card">
    <div class="card-header">
        <h2 class="card-title">Formulir PL.4 Tingkat Keberhasilan Pemenuhan Layanan</h2>
    </div>
    <div id="button-datatable"></div>
    <div class="card-body">
        <div class="form-tambah">
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="realisasi_sub_indikator">
                    PL.4.1 Realisasi sub-indikator <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('realisasi_sub_indikator')is-invalid @enderror"
                        id="realisasi_sub_indikator" name="realisasi_sub_indikator"
                        placeholder="Masukkan Nilai Realisasi sub-indikator" required>
                    @error('realisasi_sub_indikator')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="target_sub_indikator">
                    PL.4.2 Target sub-indikator <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('target_sub_indikator')is-invalid @enderror"
                        id="target_sub_indikator" name="target_sub_indikator"
                        placeholder="Masukkan Target sub-indikator" required>
                    @error('target_sub_indikator')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
