<div class="card">
    <div class="card-header">
        <h2 class="card-title">Formulir KE.3 Efektivitas</h2>
    </div>
    <div id="button-datatable"></div>
    <div class="card-body">
        <div class="form-tambah">
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="surplus_pos">
                    KE.3.1 Surplus atau Defisit sebelum Pos Keuntungan (1-5) <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('surplus_pos')is-invalid @enderror"
                        id="surplus_pos" name="surplus_pos" min="1" max="5"
                        placeholder="Masukkan Nilai Surplus atau Defisit sebelum Pos Keuntungan (1-5)" required>
                    @error('surplus_pos')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="kerugian">
                    KE.3.2 Kerugian (1-5) <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('kerugian')is-invalid @enderror" id="kerugian"
                        name="kerugian" placeholder="Masukkan Kerugian  (1-5)" min="1" max="5" required>
                    @error('kerugian')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="total_ekuitas">
                    KE.3.3 Total Ekuitas (1-5) <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('total_ekuitas')is-invalid @enderror"
                        id="total_ekuitas" name="total_ekuitas" placeholder="Masukkan Total Ekuitas (1-5)"
                        min="1" max="5" required>
                    @error('total_ekuitas')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
