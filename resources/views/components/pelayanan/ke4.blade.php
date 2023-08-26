<div class="card">
    <div class="card-header">
        <h2 class="card-title">Formulir KE.4 Tingkat Kemandirian
        </h2>
    </div>
    <div id="button-datatable"></div>
    <div class="card-body">
        <div class="form-tambah">
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="pendapatan_lra">
                    KE.4.1 Total Pendapatan (LRA) (1-5) <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('pendapatan_lra')is-invalid @enderror"
                        id="pendapatan_lra" name="pendapatan_lra" min="1" max="5"
                        placeholder="Masukkan Nilai Total Pendapatan (LRA) (1-5)" required>
                    @error('pendapatan_lra')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="total_belanja_lra">
                    KE.4.2 Total Belanja (LRA) (1-5) <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('total_belanja_lra')is-invalid @enderror"
                        id="total_belanja_lra" name="total_belanja_lra" placeholder="Masukkan Total Belanja (LRA) (1-5)"
                        min="1" max="5" required>
                    @error('total_belanja_lra')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
