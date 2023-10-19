<div class="card">
    <div class="card-header">
        <h2 class="card-title" style="font-weight: 600">Formulir KE.2 Efisiensi</h2>
    </div>
    <div id="button-datatable"></div>
    <div class="card-body">
        <div class="form-tambah">
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="output_blu">
                    KE.2.1 Output BLU / Pendapatan Operasional (Rp) <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('output_blu')is-invalid @enderror" id="output_blu"
                        name="output_blu" placeholder="Masukkan Nilai Output BLU (Pendapatan Operasional)" required
                        value="{{ $inputan ? $inputan['output_blu'] : '' }}">
                    @error('output_blu')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="input_blu">
                    KE.2.2 Input BLU / Total Beban (Rp) <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('input_blu')is-invalid @enderror" id="input_blu"
                        name="input_blu" placeholder="Masukkan Input BLU (Total Beban)" required
                        value="{{ $inputan ? $inputan['input_blu'] : '' }}">
                    @error('input_blu')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="target_pobo">
                    Target Pendapatan Operasional terhadap Beban Operasional (%) <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('target_pobo')is-invalid @enderror"
                        id="target_pobo" name="target_pobo"
                        placeholder="Masukkan Nilai (%) Target Operasional terhadap Beban Operasional 1-100"
                        min="1" max="100" required value="{{ $inputan ? $inputan['target_pobo'] : '' }}">
                    @error('target_pobo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
