<div class="card">
    <div class="card-header">
        <h2 class="card-title">Formulir KE.2 Efisiensi</h2>
    </div>
    <div id="button-datatable"></div>
    <div class="card-body">
        <div class="form-tambah">
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="output_blu">
                    KE.2.1 Output BLU (Pendapatan Operasional) (1-5) <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('output_blu')is-invalid @enderror" id="output_blu"
                        name="output_blu" min="1" max="5"
                        placeholder="Masukkan Nilai Output BLU (Pendapatan Operasional) (1-5)" required>
                    @error('output_blu')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="input_blu">
                    KE.2.2 Input BLU (Total Beban) (1-5) <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('input_blu')is-invalid @enderror" id="input_blu"
                        name="input_blu" placeholder="Masukkan Input BLU (Total Beban)  (1-5)" min="1"
                        max="5" required>
                    @error('input_blu')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
