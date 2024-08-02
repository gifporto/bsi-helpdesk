<!-- table -->
<div class="col-lg-12">
    <div class="card shadow-2">
        <div class="card-body">

            <div class="mb-2 d-flex justify-content-between">
                <div class="btn-toolbar d-flex flex-wrap align-items-center">
                    <div class="btn-group btn-group-sm">
                        <button class="btn dropdown-toggle m-1" data-toggle="dropdown">Status</button>
                        <div class="dropdown-menu dropdown-menu-left">
                            <a class="dropdown-item" href="#">Pending</a>
                            <a class="dropdown-item" href="#">Proses</a>
                            <a class="dropdown-item" href="#">Selesai</a>
                        </div>
                    </div>
                    <div class="btn-group btn-group-sm m-1">
                        <input type="date" class="btn form-control">
                    </div>
                    <div class="btn-group btn-group-sm">
                        <button class="btn dropdown-toggle m-1" data-toggle="dropdown">Asal</button>
                        <div class="dropdown-menu dropdown-menu-left">
                            <input type="text" class="form-control mb-2" placeholder="Cari opsi...">
                            <a class="dropdown-item" href="#">Asal Surat 1</a>
                            <a class="dropdown-item" href="#">Asal Surat 2</a>
                            <a class="dropdown-item" href="#">Asal Surat 3</a>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-separated table-striped table-responsive-sm" data-provide="datatables" data-scroll-collapse="true" cellspacing="0">
                <thead class="bg-color-primary1">
                    <tr>
                        <th class="font-weight-bold">Tanggal</th>
                        <th class="font-weight-bold">Nama</th>
                        <th class="font-weight-bold">Asal</th>
                        <th class="font-weight-bold">Perihal</th>
                        <th class="font-weight-bold">Status</th>
                        <th class="font-weight-bold">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>99 Sept 9999</td>
                        <td>Taufiq Aditya Putra</td>
                        <td>Instansi ABC</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum corporis vel magni distinctio debitis similique libero, aut hic impedit tempore.</td>
                        <td>
                            <div class="media-right">
                                <div class="btn btn-sm btn-bold btn-round btn-flat btn-secondary w-100px">Pending</div>
                            </div>
                        </td>
                        <td>
                            <a href="" data-toggle="modal" data-target="#modal-default" class="btn btn-square btn-round btn-success"><i class="fa fa-pencil"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>99 Sept 9999</td>
                        <td>Taufiq Aditya Putra</td>
                        <td>Instansi ABC</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum corporis vel magni distinctio debitis similique libero, aut hic impedit tempore.</td>
                        <td>
                            <div class="media-right">
                                <div class="btn btn-sm btn-bold btn-round btn-flat btn-warning w-100px">Proses</div>
                            </div>
                        </td>
                        <td>
                            <a href="" data-toggle="modal" data-target="#modal-default" class="btn btn-square btn-round btn-success"><i class="fa fa-pencil"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>99 Sept 9999</td>
                        <td>Taufiq Aditya Putra</td>
                        <td>Instansi ABC</td>
                        <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum corporis vel magni distinctio debitis similique libero, aut hic impedit tempore.</td>
                        <td>
                            <div class="media-right">
                                <div class="btn btn-sm btn-bold btn-round btn-flat btn-success w-100px">Selesai</div>
                            </div>
                        </td>
                        <td>
                            <a href="" data-toggle="modal" data-target="#modal-default1" class="btn btn-square btn-round btn-info"><i class="fa fa-eye"></i></a>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>
</div>

<!-- ubah Modal -->
<div class="modal fade" id="modal-default" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Detail Ajuan</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body form-type-round">
                <div class="form-group row">
                    <label class="col-4 col-lg-2 col-form-label" for="input-2">Nama</label>
                    <div class="col-8 col-lg-10">
                        <p class="col-form-label">: Taufiq Aditya Putra</p>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-lg-2 col-form-label" for="input-2">No.Whatsapp</label>
                    <div class="col-8 col-lg-10">
                        <p class="col-form-label">: 3152463733753</p>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-lg-2 col-form-label" for="input-2">Asal Instansi</label>
                    <div class="col-8 col-lg-10">
                        <p class="col-form-label">: Biso Kemahasiswaan Akademik</p>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-lg-2 col-form-label" for="input-2">Keperluan</label>
                    <div class="col-8 col-lg-10">
                        <p class="col-form-label">: Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus suscipit, nemo ducimus voluptatibus deleniti iste fugiat ut mollitia veniam vero!</p>
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
                    <label class="text-dark col-4 col-lg-2 col-form-label" for="input-2">Status</label>
                    <div class="col-8 col-lg-4">
                        <select class="form-control">
                            <option>Pending</option>
                            <option>Proses</option>
                            <option>Selesai</option>
                        </select>
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
                <h4>Detail Ajuan</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body form-type-round">
                <div class="form-group row">
                    <label class="col-4 col-lg-2 col-form-label" for="input-2">Nama</label>
                    <div class="col-8 col-lg-10">
                        <p class="col-form-label">: Taufiq Aditya Putra</p>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-lg-2 col-form-label" for="input-2">No.Whatsapp</label>
                    <div class="col-8 col-lg-10">
                        <p class="col-form-label">: 3152463733753</p>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-lg-2 col-form-label" for="input-2">Asal Instansi</label>
                    <div class="col-8 col-lg-10">
                        <p class="col-form-label">: Biso Kemahasiswaan Akademik</p>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-4 col-lg-2 col-form-label" for="input-2">Keperluan</label>
                    <div class="col-8 col-lg-10">
                        <p class="col-form-label">: Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus suscipit, nemo ducimus voluptatibus deleniti iste fugiat ut mollitia veniam vero!</p>
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
                    <label class="text-dark col-4 col-lg-2 col-form-label" for="input-2">Status</label>
                    <div class="col-8 col-lg-4">
                        <select class="form-control">
                            <option>Pending</option>
                            <option>Proses</option>
                            <option>Selesai</option>
                        </select>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- modal -->