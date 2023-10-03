<div class="card">
    <div class="card-header">
        <h2 class="card-title" style="font-weight: 600">Formulir IN.4 - Manajemen Perubahan</h2>
    </div>
    <div class="card-body">
        <div class="form-tambah">
            <div class="row mb-3">
                <label class="col-12 form-label">
                    IN.4.1 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator41" id="indikator411"
                            {{ count($inputan) > 0 ? '' : 'checked' }}
                            {{ $inputan ? ($inputan['indikator41'] == 1 ? 'checked' : '') : '' }} value="1">
                        <label class="form-check-label" for="indikator411">
                            Keberhasilan proses perubahan
                            setidaknya bergantung pada upaya
                            dan pengalaman individu tertentu
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator41" id="indikator412"
                            {{ $inputan ? ($inputan['indikator41'] == 2 ? 'checked' : '') : '' }} value="2">
                        <label class="form-check-label" for="indikator412">
                            Keberhasilan proses perubahan
                            setidaknya bergantung pada upaya dan
                            pengalaman unit/tim tertentu, di mana
                            struktur tim manajemen perubahan ini
                            setidaknya sudah dibentuk secara
                            informal atau penugasan lisan.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator41" id="indikator413"
                            {{ $inputan ? ($inputan['indikator41'] == 3 ? 'checked' : '') : '' }} value="3">
                        <label class="form-check-label" for="indikator413">
                            Keberhasilan proses perubahan
                            setidaknya bergantung pada upaya dan
                            pengalaman unit/tim manajemen
                            perubahan khusus yang dibentuk
                            secara formal, di mana struktur dan
                            tugas dan tanggung jawabnya telah
                            dituangkan dalam dokumen formal.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator41" id="indikator414"
                            {{ $inputan ? ($inputan['indikator41'] == 4 ? 'checked' : '') : '' }} value="4">
                        <label class="form-check-label" for="indikator414">
                            Keberhasilan proses perubahan
                            bergantung pada organisasi secara
                            keseluruhan, termasuk upaya dan
                            pengalaman unit/tim manajemen
                            perubahan khusus yang dibentuk
                            secara formal. Dalam hal ini, unit/tim
                            manajemen perubahan juga akan
                            melakukan pengukuran keberhasilan
                            atas pelaksanaan manajemen
                            perubahan sebagai langkah
                            evaluasi/pengujian dan tindak lanjut
                            untuk manajemen perubahan ke
                            depannya
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator41" id="indikator415"
                            {{ $inputan ? ($inputan['indikator41'] == 5 ? 'checked' : '') : '' }} value="5">
                        <label class="form-check-label" for="indikator415">
                            Keberhasilkan manajemen perubahan
                            sudah sepenuhnya bergantung pada
                            organisasi di mana setidaknya
                            manajemen perubahan telah
                            terintegrasi secara otomatis dengan
                            bantuan infrastruktur yang memadai
                        </label>
                    </div>
                </div>
                @error('indikator41')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    IN.4.2 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator42" id="indikator421"
                            {{ count($inputan) > 0 ? '' : 'checked' }}
                            {{ $inputan ? ($inputan['indikator42'] == 1 ? 'checked' : '') : '' }} value="1">
                        <label class="form-check-label" for="indikator421">
                            Proses manajemen perubahan
                            setidaknya telah dilakukan secara adhoc.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator42" id="indikator422"
                            {{ $inputan ? ($inputan['indikator42'] == 2 ? 'checked' : '') : '' }} value="2">
                        <label class="form-check-label" for="indikator422">
                            Proses manajemen perubahan
                            setidaknya telah dilakukan secara
                            rutin dan informal.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator42" id="indikator423"
                            {{ $inputan ? ($inputan['indikator42'] == 3 ? 'checked' : '') : '' }} value="3">
                        <label class="form-check-label" for="indikator423">
                            Proses manajemen perubahan
                            setidaknya telah dilakukan secara
                            rutin dan formal, di mana sudah
                            terdapat prosedur baku/standar atas
                            proses manajemen perubahan.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator42" id="indikator424"
                            {{ $inputan ? ($inputan['indikator42'] == 4 ? 'checked' : '') : '' }} value="4">
                        <label class="form-check-label" for="indikator424">
                            Proses manajemen perubahan
                            setidaknya telah dilakukan secara rutin
                            dan formal, di mana sudah terdapat
                            prosedur baku/standar atas proses
                            manajemen perubahan, termasuk
                            standar pengukuran keberhasilan atas
                            pelaksanaan aktivitas manajemen
                            perubahan.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator42" id="indikator425"
                            {{ $inputan ? ($inputan['indikator42'] == 5 ? 'checked' : '') : '' }} value="5">
                        <label class="form-check-label" for="indikator425">
                            Proses manajemen perubahan sudah
                            dalam tahap continuous improvement
                            dan dapat memproyeksikan
                            keberhasilan manajemen perubahan
                            dan peran terhadap organisasi
                        </label>
                    </div>
                </div>
                @error('indikator42')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    IN.4.3 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator43" id="indikator431"
                            {{ count($inputan) > 0 ? '' : 'checked' }}
                            {{ $inputan ? ($inputan['indikator43'] == 2 ? 'checked' : '') : '' }} value="2">
                        <label class="form-check-label" for="indikator431">
                            Unsur-unsur perencanaan komunikasi
                            jelas, dan setidaknya terdapat sedikit
                            pelatihan sebagai bagian dari
                            manajemen perubahan.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator43" id="indikator432"
                            {{ $inputan ? ($inputan['indikator43'] == 3 ? 'checked' : '') : '' }} value="3">
                        <label class="form-check-label" for="indikator432">
                            Terdapat pelatihan dan alat
                            pendukung bagi para pemimpin proyek
                            perubahan dan anggota tim (change
                            agent).
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator43" id="indikator433"
                            {{ $inputan ? ($inputan['indikator43'] == 4 ? 'checked' : '') : '' }} value="4">
                        <label class="form-check-label" for="indikator433">
                            Terdapat pelatihan secara berkala dan
                            BLU berpartisipasi aktif dalam
                            mendukung inisiatif perubahan.
                        </label>
                    </div>
                </div>
                @error('indikator43')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>
