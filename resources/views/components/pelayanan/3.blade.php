<div class="card">
    <div class="card-header">
        <h2 class="card-title" style="font-weight: 600">Formulir PL.3 Sistem Pengaduan Layanan</h2>
    </div>
    <div id="button-datatable"></div>
    <div class="card-body">
        <div class="form-tambah">
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="pengaduan_ditindaklanjut">
                    PL.3.1 Pengaduan Ditindaklanjuti <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('pengaduan_ditindaklanjut')is-invalid @enderror"
                        id="pengaduan_ditindaklanjut" name="pengaduan_ditindaklanjut"
                        placeholder="Masukkan Nilai Pengaduan Ditindaklanjuti" required>
                    @error('pengaduan_ditindaklanjut')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="jumlah_pengaduan">
                    PL.3.2 Jumlah Pengaduan <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('jumlah_pengaduan')is-invalid @enderror"
                        id="jumlah_pengaduan" name="jumlah_pengaduan" placeholder="Masukkan Jumlah Pengaduan" required>
                    @error('jumlah_pengaduan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-12 col-md-4 form-label" for="penyelasaian_tepat_waktu">
                    PL.3.3 Penyelesaian Tepat Waktu <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-8">
                    <input type="number" class="form-control @error('penyelasaian_tepat_waktu')is-invalid @enderror"
                        id="penyelasaian_tepat_waktu" name="penyelasaian_tepat_waktu"
                        placeholder="Masukkan Penyelesaian Tepat Waktu" required>
                    @error('penyelasaian_tepat_waktu')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
