<div class="card">
    <div class="card-header">
        <h2 class="card-title" style="font-weight: 600">Formulir Penilaian Tren Indikator
        </h2>
    </div>
    <div id="button-datatable"></div>
    <div class="card-body">
        <div class="form-tambah">
            <div class="row mb-3">
                <label class="col-12 form-label">
                    KE.1 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tren_pen_indikator"
                            id="tren_pen_indikator1" value="1" checked>
                        <label class="form-check-label" for="tren_pen_indikator1">
                            Tren penilaian indikator menurun dalam jangka 3 tahunan
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tren_pen_indikator"
                            id="tren_pen_indikator2" value="2">
                        <label class="form-check-label" for="tren_pen_indikator2">
                            Tren penilaian indikator tetap dalam jangka 3 tahunan
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tren_pen_indikator"
                            id="tren_pen_indikator3" value="3">
                        <label class="form-check-label" for="tren_pen_indikator3">
                            Tren penilaian indikator mengalami kenaikan dalam jangka 3 tahunan
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tren_pen_indikator"
                            id="tren_pen_indikator4" value="4">
                        <label class="form-check-label" for="tren_pen_indikator4">
                            Tren penilaian indikator mengalami kenaikan signifikan dalam jangka 3
                            tahunan
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="tren_pen_indikator"
                            id="tren_pen_indikator5" value="5">
                        <label class="form-check-label" for="tren_pen_indikator5">
                            Tren penilaian indikator stabil di angka capaian target ideal dalam jangka 3
                            tahunan
                        </label>
                    </div>
                </div>
                @error('tren_pen_indikator')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>
