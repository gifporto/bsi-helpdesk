<div class="col-12">
    <div class="card shadow-2">
        <div class="card-body">

            <div class="media-list media-list-sm media-list-hover media-list-divided ">
                <div class="flexbox mb-20">
                    <div class="lookup">
                        <input class="w-200px" type="text" data-provide="media-search" placeholder="search..">
                    </div>
                    <div class="ml-2">
                    <a class="btn btn-sm btn-round btn-custom" data-toggle="modal" data-target="#modal-default" href="">+ Tambah</a>
                </div>
                </div>
                <div class="media media-single">
                    <div class="media-body" onclick="window.location.href='<?= site_url('pt/Prodi/detailprodi'); ?>'">
                        <h6 class="fw-700">Taufiq Aditya Putra</h6>
                        <small class="text-fader">Biro Sistem Informasi Unit 1</small>
                    </div>
                    <div class="media-right">
                        <a href="" data-toggle="modal" data-target="#modal-default" class="btn btn-square btn-round btn-success"><i class="fa fa-pencil"></i></a>
                        <a href="" data-toggle="modal" data-target="#modal-default" class="btn btn-square btn-round btn-danger"><i class="fa fa-trash"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- tambah Modal -->
<div class="modal fade" id="modal-default" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Tambah Surat Masuk</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body form-type-round">
                <div class="card card-bordered card-body">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="text-dark">Jenis Surat</label>
                            <select class="form-control">
                                <option>Pemberitahuan</option>
                                <option>Keterangan</option>
                                <option>Undangan</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="text-dark">Sifat Urgensi</label>
                            <select class="form-control">
                                <option>Rahasia</option>
                                <option>Penting</option>
                                <option>Biasa</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="text-dark">Tanggal (Default otomatis)</label>
                            <div class="input-group">
                                <input type="text" class="form-control" data-provide="datepicker" value="<?= date("d/m/y") ?>" disabled>
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="text-dark">Klasifikasi</label>
                            <select class="form-control">
                                <option>Akdemik</option>
                                <option>SDM</option>
                                <option>AIk</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="text-dark">Nomor surat</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="text-dark">Perihal</label>
                            <input class="form-control" type="text">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-12">
                            <label class="text-dark">Isi Ringkas</label>
                            <textarea class="form-control" rows="5"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-12">
                            <label class="text-dark">Kategori</label>
                            <select class="form-control" id="kategoriSelect" onchange="tampilkanData()">
                                <option>Pilih Kategori</option>
                                <option>Internal</option>
                                <option>Eksternal</option>
                            </select>
                        </div>
                    </div>

                    <div class="row" id="hasil">
                        <!-- Data akan ditampilkan di sini saat dropdown berubah -->

                        <!-- <div class="form-group col-lg-6"> <label class="text-dark">Tujuan Internal</label> 
                            <select class="form-control"> 
                                <option>Biro Sistem Informasi</option> 
                                <option>Biro Sumber Daya Manusia</option> 
                            </select> 
                        </div>
                        
                        <div class="form-group col-lg-6"> 
                            <label class="text-dark">Tujuan Eksternal</label> 
                            <input class="form-control" type="text"> 
                        </div> 
                        <div class="form-group col-lg-6"> 
                            <label class="text-dark">Email</label> <input class="form-control" type="text"> 
                        </div> -->
                    </div>

                    <div class="row">
                        <div class="form-group file-group col-lg-6">
                            <label class="text-dark">Upload file</label>
                            <div class="input-group">
                                <input type="text" class="form-control file-value file-browser" placeholder="Choose file..." readonly>
                                <input type="file" multiple>
                                <span class="input-group-addon">
                                    <i class="fa fa-upload"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="mx-4 my-4 text-right">
                    <a class="btn btn-round btn-custom" type="submit" href="">Simpan</a>
                </footer>
            </div>
        </div>
    </div>
</div>
<!-- modal -->

<!-- detail Modal -->
<div class="modal fade" id="modal-default1" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Detail Surat</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body form-type-round">
                <div class="form-group row">
                    <label class="col-4 col-lg-2 col-form-label" for="input-2">Jenis</label>
                    <div class="col-8 col-lg-10">
                        <p class="col-form-label">: Pemberitauan</p>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-lg-2 col-form-label" for="input-2">Asal</label>
                    <div class="col-8 col-lg-10">
                        <p class="col-form-label">: Biso Kemahasiswaan Akademik</p>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-lg-2 col-form-label" for="input-2">Nomor Surat</label>
                    <div class="col-8 col-lg-10">
                        <p class="col-form-label">: 9999999</p>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-lg-2 col-form-label" for="input-2">Perihal</label>
                    <div class="col-8 col-lg-10">
                        <p class="col-form-label">: Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, nam?</p>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-lg-2 col-form-label" for="input-2">Tujuan</label>
                    <div class="col-8 col-lg-10">
                        <p class="col-form-label">: Biro Sistem Informasi</p>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-lg-2 col-form-label" for="input-2">Tanggal Diterima</label>
                    <div class="col-8 col-lg-10">
                        <p class="col-form-label">: 99 Desember 9999</p>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-lg-2 col-form-label" for="input-2">Sifat Urgensi</label>
                    <div class="col-8 col-lg-10">
                        <p class="col-form-label">: Rahasia</p>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-lg-2 col-form-label" for="input-2">Isi Ringkasan</label>
                    <div class="col-8 col-lg-10">
                        <p class="col-form-label">: Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, id!</p>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-lg-2 col-form-label" for="input-2">Status Tindakan</label>
                    <div class="col-8 col-lg-10">
                        <div class="d-flex flex-row align-items-start">
                            <p class="col-form-label mr-2">:</p>
                            <div class="btn btn-sm btn-bold btn-round btn-flat btn-warning w-100px">Disposisi</div>
                            <div class="btn btn-sm btn-bold btn-round btn-flat btn-success w-100px">Selesai</div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-lg-2 col-form-label" for="input-2">Status Arsip</label>
                    <div class="col-8 col-lg-10">
                        <div class="d-flex flex-row align-items-start">
                            <p class="col-form-label mr-2">:</p>
                            <div class="btn btn-sm btn-bold btn-round btn-flat btn-warning w-100px">Belum</div>
                            <div class="btn btn-sm btn-bold btn-round btn-flat btn-success w-100px">diarsip</div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-lg-2 col-form-label" for="input-2">File</label>
                    <div class="col-8 col-lg-10">
                        <div class="d-flex flex-row align-items-start">
                            <p class="col-form-label">:</p>
                            <div class="card card-bordered ml-2">
                                <div class="media align-items-center">
                                    <i class="fa fa-file-text fs-20 text-danger"></i>
                                    <p class="font-weight-bold">ContohNamaFile.pdf</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gap-items-2 gap-y pb-2">
                    <button id="button1" class="btn btn-sm btn-secondary" data-provide="loader" data-target="#loader-target">Disposisi</button>
                    <button id="button2" class="btn btn-sm  btn-secondary" data-provide="loader" data-target="#loader-target">Arsip</button>
                </div>

                <div id="text1" class="card card-bordered card-body hidden">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="text-dark">Tanggal (Default otomatis)</label>
                            <div class="input-group">
                                <input type="text" class="form-control" data-provide="datepicker">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="text-dark">Sifat Urgensi</label>
                            <select class="form-control">
                                <option>Rahasia</option>
                                <option>Penting</option>
                                <option>Biasa</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <label class="text-dark">Dari</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group col-lg-6">
                            <label class="text-dark">Kepada</label>
                            <select class="form-control">
                                <option>Biro Sistem Informasi</option>
                                <option>Biro Keuangan</option>
                                <option>Biro Kemahaiswaan</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-12">
                            <label class="text-dark">Intruksi</label>
                            <input class="form-control" type="text">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-12">
                            <label class="text-dark">Catatan</label>
                            <textarea class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                </div>

                <div id="text2" class="card card-bordered card-body hidden">
                    <p class="text-danger">Surat akan di Arsipkan!</p>
                </div>

                <footer class="mx-4 my-4 text-right">
                    <a class="btn btn-round btn-custom" type="submit" href="">Simpan</a>
                </footer>

            </div>
        </div>
    </div>
</div>
<!-- modal -->