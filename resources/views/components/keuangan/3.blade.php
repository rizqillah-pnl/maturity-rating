<div class="card">
    <div class="card-header">
        <h2 class="card-title" style="font-weight: 600">Formulir KE.3 Efektivitas</h2>
    </div>
    <div id="button-datatable"></div>
    <div class="card-body">
        <div class="form-tambah">
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="surplus_pos">
                    KE.3.1 Surplus atau Defisit sebelum Pos Keuntungan <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('surplus_pos')is-invalid @enderror"
                        id="surplus_pos" name="surplus_pos"
                        placeholder="Masukkan Nilai Surplus atau Defisit sebelum Pos Keuntungan" required>
                    @error('surplus_pos')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="kerugian">
                    KE.3.2 Kerugian <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('kerugian')is-invalid @enderror" id="kerugian"
                        name="kerugian" placeholder="Masukkan Kerugian" required>
                    @error('kerugian')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="total_aset">
                    KE.3.3 Total Aset <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('total_aset')is-invalid @enderror" id="total_aset"
                        name="total_aset" placeholder="Masukkan Total Aset" required>
                    @error('total_aset')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="total_ekuitas">
                    KE.3.4 Total Ekuitas <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('total_ekuitas')is-invalid @enderror"
                        id="total_ekuitas" name="total_ekuitas" placeholder="Masukkan Total Ekuitas" required>
                    @error('total_ekuitas')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="target_imbalan_atas_aset">
                    (%) Target Imbalan Atas Aset <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('target_imbalan_atas_aset')is-invalid @enderror"
                        id="target_imbalan_atas_aset" name="target_imbalan_atas_aset"
                        placeholder="Masukkan Nilai (%) Target Imbalan Atas Aset" required>
                    @error('target_imbalan_atas_aset')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="target_imbalan_atas_ekuitas">
                    (%) Target Imbalan Atas Ekuitas <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('target_imbalan_atas_ekuitas')is-invalid @enderror"
                        id="target_imbalan_atas_ekuitas" name="target_imbalan_atas_ekuitas"
                        placeholder="Masukkan Nilai (%) Target Imbalan Atas Ekuitas" required>
                    @error('target_imbalan_atas_ekuitas')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
