<div class="card">
    <div class="card-header">
        <h2 class="card-title" style="font-weight: 600">Formulir PL.2 Efisiensi Waktu Pelayanan</h2>
    </div>
    <div id="button-datatable"></div>
    <div class="card-body">
        <div class="form-tambah">
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="layanan_tpt_waktu">
                    PL.2.1 Layanan Tepat Waktu <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('layanan_tpt_waktu')is-invalid @enderror"
                        id="layanan_tpt_waktu" name="layanan_tpt_waktu" placeholder="Masukkan Nilai Layanan Tepat Waktu"
                        required value="{{ $inputan ? $inputan['layanan_tpt_waktu'] : '' }}">
                    @error('layanan_tpt_waktu')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="jum_layanan">
                    PL.2.2 Jumlah Layanan Dihantarkan <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('jum_layanan')is-invalid @enderror"
                        id="jum_layanan" name="jum_layanan" placeholder="Masukkan Jumlah Layanan Dihantarkan" required
                        value="{{ $inputan ? $inputan['jum_layanan'] : '' }}">
                    @error('jum_layanan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="target_efisiensi_pelayanan">
                    Target Efisiensi Waktu Pelayanan (%) <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('target_efisiensi_pelayanan')is-invalid @enderror"
                        id="target_efisiensi_pelayanan" name="target_efisiensi_pelayanan"
                        placeholder="Masukkan Nilai (%) Target Efisiensi Waktu Pelayanan 1-100" min="1"
                        max="100" required value="{{ $inputan ? $inputan['target_efisiensi_pelayanan'] : '' }}">
                    @error('target_efisiensi_pelayanan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
