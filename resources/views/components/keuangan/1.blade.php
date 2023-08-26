<div class="card">
    <div class="card-header">
        <h2 class="card-title">Formulir KE.1 Likuiditas</h2>
    </div>
    <div id="button-datatable"></div>
    <div class="card-body">
        <div class="form-tambah">
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="aset_lancar">
                    KE.1.1 Aset Lancar (1-5) <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('aset_lancar')is-invalid @enderror"
                        id="aset_lancar" name="aset_lancar" min="1" max="5"
                        placeholder="Masukkan Nilai Aset Lancar (1-5)" required>
                    @error('aset_lancar')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="kwjb_jgk">
                    KE.1.2 Kewajiban Jangka Pendek (1-5) <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('kwjb_jgk')is-invalid @enderror" id="kwjb_jgk"
                        name="kwjb_jgk" placeholder="Masukkan Kewajiban Jangka Pendek (1-5)" min="1"
                        max="5" required>
                    @error('kwjb_jgk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="pdp_inves_jgk">
                    KE.1.3 Pendapatan Investasi Jangka Pendek (1-5) <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('pdp_inves_jgk')is-invalid @enderror"
                        id="pdp_inves_jgk" name="pdp_inves_jgk"
                        placeholder="Masukkan Pendapatan Investasi Jangka Pendek (1-5)" required min="1"
                        max="5">
                    @error('pdp_inves_jgk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="saldo_rek_op">
                    KE.1.4 Saldo rekening operasional (1-5) <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('saldo_rek_op')is-invalid @enderror"
                        id="saldo_rek_op" name="saldo_rek_op" placeholder="Masukkan Saldo rekening operasional (1-5)"
                        required min="1" max="5">
                    @error('saldo_rek_op')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="pengelolaan_kas">
                    KE.1.5 Pengelolaan Kas (1-5) <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('pengelolaan_kas')is-invalid @enderror"
                        id="pengelolaan_kas" name="pengelolaan_kas" placeholder="Masukkan Nama Pengelolaan Kas (1-5)"
                        required min="1" max="5">
                    @error('pengelolaan_kas')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
