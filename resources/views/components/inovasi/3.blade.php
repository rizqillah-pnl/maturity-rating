<div class="card">
    <div class="card-header">
        <h2 class="card-title" style="font-weight: 600">Formulir IN.3 - Manajemen Pengetahuan</h2>
    </div>
    <div class="card-body">
        <div class="form-tambah">
            <div class="row mb-3">
                <label class="col-12 form-label">
                    IN.3.1 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator31" id="indikator311"
                            {{ count($inputan) > 0 ? '' : 'checked' }}
                            {{ $inputan ? ($inputan['indikator31'] == 1 ? 'checked' : '') : '' }} value="1">
                        <label class="form-check-label" for="indikator311">
                            Organisasi setidaknya telah memiliki
                            kesadaran terkait pentingnya
                            pengelolaan sumber daya
                            pengetahuan dalam mendukung
                            kegiatan operasional dan inovasi.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator31" id="indikator312"
                            {{ $inputan ? ($inputan['indikator31'] == 2 ? 'checked' : '') : '' }} value="2">
                        <label class="form-check-label" for="indikator312">
                            Organisasi setidaknya telah melakukan
                            pengelolaan sumber daya
                            pengetahuan secara rutin, di mana
                            pengetahuan yang diperlukan untuk
                            melakukan tugas rutin telah
                            didokumentasikan.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator31" id="indikator313"
                            {{ $inputan ? ($inputan['indikator31'] == 3 ? 'checked' : '') : '' }} value="3">
                        <label class="form-check-label" for="indikator313">
                            Organisasi menganggap sumber daya
                            pengetahuan sebagai informasi yang
                            ditempatkan dalam konteks tujuan
                            organisasi, pengetahuan dipelihara
                            (maintained) sehingga tetap relevan serta Organisasi setidaknya telah memiliki
                            infrastruktur dasar untuk mendukung pengelolaan sumber daya
                            pengetahuan.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator31" id="indikator314"
                            {{ $inputan ? ($inputan['indikator31'] == 4 ? 'checked' : '') : '' }} value="4">
                        <label class="form-check-label" for="indikator314">
                            Terdapat aktivitas pengawasan
                            dan/atau evaluasi kegiatan manajemen
                            pengetahuan, serta pengukuran
                            tingkat partisipan yang menggunakan
                            informasi dan pengetahuan yang telah
                            dikelola.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator31" id="indikator315"
                            {{ $inputan ? ($inputan['indikator31'] == 5 ? 'checked' : '') : '' }} value="5">
                        <label class="form-check-label" for="indikator315">
                            Kegiatan pengumpulan, penyimpanan,
                            dan berbagi pengetahuan pada
                            organisasi ditinjau dan diperbaiki
                            secara berkelanjutan, kelemahan dari
                            proses ini dapat dengan mudah
                            diidentifikasi dan diperbaiki.
                        </label>
                    </div>
                </div>
                @error('indikator31')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    IN.3.2 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator32" id="indikator321"
                            {{ count($inputan) > 0 ? '' : 'checked' }}
                            {{ $inputan ? ($inputan['indikator32'] == 1 ? 'checked' : '') : '' }} value="1">
                        <label class="form-check-label" for="indikator321">
                            Organisasi setidaknya telah melakukan
                            pengelolaan sumber daya
                            pengetahuan secara ad-hoc dan/atau
                            jika terdapat permintaan dari pihak
                            manajemen.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator32" id="indikator322"
                            {{ $inputan ? ($inputan['indikator32'] == 2 ? 'checked' : '') : '' }} value="2">
                        <label class="form-check-label" for="indikator322">
                            Personel (individu) organisasi
                            setidaknya telah melakukan pertukaran
                            informasi/pengetahuan secara
                            informal.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator32" id="indikator323"
                            {{ $inputan ? ($inputan['indikator32'] == 3 ? 'checked' : '') : '' }} value="3">
                        <label class="form-check-label" for="indikator323">
                            Organisasi setidaknya telah
                            mendefinisikan standar baku dan
                            prosedur formal dalam melakukan
                            manajemen pengetahuan.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator32" id="indikator324"
                            {{ $inputan ? ($inputan['indikator32'] == 4 ? 'checked' : '') : '' }} value="4">
                        <label class="form-check-label" for="indikator324">
                            Terdapat aktivitas pengawasan
                            dan/atau evaluasi terhadap
                            infrastruktur dari sistem informasi
                            manajemen pengetahuan.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator32" id="indikator325"
                            {{ $inputan ? ($inputan['indikator32'] == 5 ? 'checked' : '') : '' }} value="5">
                        <label class="form-check-label" for="indikator325">
                            Infrastruktur sistem informasi yang
                            digunakan untuk manajemen
                            pengetahuan terus ditingkatkan.
                            Dalam hal ini, sistem manajemen
                            pengetahuan terintegrasi dengan
                            sistem informasi sumber daya manusia
                            (HRIS), sehingga dapat memantau
                            perkembangan pengetahuan dari
                            setiap individu.
                        </label>
                    </div>
                </div>
                @error('indikator32')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <label class="col-12 form-label">
                    IN.3.3 <span class="text-danger">*</span>
                </label>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator33" id="indikator331"
                            {{ count($inputan) > 0 ? '' : 'checked' }}
                            {{ $inputan ? ($inputan['indikator33'] == 3 ? 'checked' : '') : '' }} value="3">
                        <label class="form-check-label" for="indikator331">
                            Personel (individu) organisasi
                            setidaknya telah melakukan
                            penyimpanan dan/atau dokumentasi
                            pengetahuan/informasi yang dimiliki
                            pribadi secara ad-hoc.
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="indikator33" id="indikator332"
                            {{ $inputan ? ($inputan['indikator33'] == 5 ? 'checked' : '') : '' }} value="5">
                        <label class="form-check-label" for="indikator332">
                            Terdapat pelatihan secara berkala
                            untuk pengetahuan/informasi yang
                            bersifat mandatory dalam rangka
                            memastikan seluruh pegawai memiliki
                            pengetahuan terkini dan sesuai
                            dengan tugas dan fungsinya.
                        </label>
                    </div>
                </div>
                @error('indikator33')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
    </div>
</div>
