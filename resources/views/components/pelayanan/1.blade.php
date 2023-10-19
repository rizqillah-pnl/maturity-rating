<div class="card">
    <div class="card-header">
        <h2 class="card-title" style="font-weight: 600">Formulir PL.1 - Indeks Kepuasan Masyarakat (IKM)</h2>
    </div>
    <div id="button-datatable"></div>
    <div class="card-body">
        <div class="form-tambah">
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="hasil_penilaian_ikm">
                    PL.1.1 Hasil Penilaian IKM <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('hasil_penilaian_ikm')is-invalid @enderror"
                        id="hasil_penilaian_ikm" name="hasil_penilaian_ikm"
                        placeholder="Masukkan Nilai Hasil Penilaian IKM" required autofocus
                        value="{{ $inputan ? $inputan['hasil_penilaian_ikm'] : '' }}">
                    @error('hasil_penilaian_ikm')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="skala_maks_ikm">
                    PL.1.2 Skala Maksimal Nilai IKM <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('skala_maks_ikm')is-invalid @enderror"
                        id="skala_maks_ikm" name="skala_maks_ikm" placeholder="Masukkan Skala Maksimal Nilai IKM"
                        required value="{{ $inputan ? $inputan['skala_maks_ikm'] : '' }}">
                    @error('skala_maks_ikm')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="target_ikm">
                    Target Indeks Kepuasan Masyarakat (%) <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('target_ikm')is-invalid @enderror" id="target_ikm"
                        name="target_ikm" placeholder="Masukkan Nilai (%) Target Indeks Kepuasan Masyarakat (IKM) 1-100"
                        min="1" max="100" required value="{{ $inputan ? $inputan['target_ikm'] : '' }}">
                    @error('target_ikm')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
