<!-- table -->
<div class="col-lg-12">
    <div class="card shadow-2">
        <div class="card-body">

            <div class="flexbox mb-20">
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

                <div class="ml-2">
                    <a class="btn btn-sm btn-round btn-custom" data-toggle="modal" data-target="#modal-default" href="">Cetak<i class="ml-2 bi bi-printer-fill"></i></a>
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
                    <?php foreach ($guests as $guest) { ?>
                        <tr>
                            <td>
                                <?php
                                $date = new DateTime($guest['created_at']);
                                $formatted_date = $date->format('d F Y H:i');
                                ?>
                                <?= $formatted_date ?>
                            </td>
                            <td><?= $guest['nama'] ?></td>
                            <td><?= $guest['instansi'] ?></td>
                            <td><?= $guest['keperluan'] ?></td>
                            <td>
                                <div class="media-right">

                                    <div class="btn btn-sm btn-bold btn-round btn-flat 
                                    <?php
                                    if ($guest['status'] == 'Selesai') {
                                        echo 'btn-success';
                                    } else if ($guest['status'] == 'Proses') {
                                        echo 'btn-warning';
                                    } else {
                                        echo 'btn-secondary';
                                    }; ?>  w-100px"><?= $guest['status'] ?>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <?php
                                $nohp = hp('085322471629');
                                $message = '&text=' . urlencode('Halo! ajuan anda sedang kami proses');
                                $linkWA = $this->agent->is_mobile()
                                    ? 'https://api.whatsapp.com/send?phone=' . $nohp . $message
                                    : 'whatsapp://send?phone=' . $nohp . $message;
                                ?>

                                <?php if ($guest['status'] != 'Selesai') : ?>
                                    <a class="btn btn-success btn-sm rounded" id="buttonB" target="" href="<?= $linkWA ?>" hidden>Chat WA</a>
                                <?php endif; ?>


                                <a href="#" data-toggle="modal" data-target="<?= $guest['status'] == 'Selesai' ? '#modal-ubah-' : '#modal-detail-' ?><?= $guest['id'] ?>" class="btn btn-square btn-round <?= $guest['status'] == 'Selesai' ? 'btn-info' : 'btn-success' ?>">
                                    <i class="<?= $guest['status'] == 'Selesai' ? 'fa fa-eye' : 'fa fa-pencil' ?>"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "language": {
                "searchPlaceholder": "Cari data di sini..."
            }
        });
    });

    function triggerButtonB() {
        var buttonB = document.getElementById('buttonB');
        buttonB.click();
    }
</script>


<!-- ubah Modal -->
<?php foreach ($guests as $guest) { ?>
    <div class="modal fade" id="modal-detail-<?= $guest['id'] ?>" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Detail Ajuan</h4>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="modal-body form-type-round" action="<?php echo site_url('staff/pengajuan/update'); ?>" method="post">
                    <input type="hidden" name="id" value="<?= $guest['id'] ?>">
                    <div class="form-group row">
                        <label class="col-4 col-lg-2 col-form-label" for="input-2">Nama</label>
                        <div class="col-8 col-lg-10">
                            <p class="col-form-label">: <?= $guest['nama'] ?></p>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-lg-2 col-form-label" for="input-2">No.Whatsapp</label>
                        <div class="col-8 col-lg-10">
                            <p class="col-form-label">: <?= $guest['telp'] ?></p>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-lg-2 col-form-label" for="input-2">Asal Instansi</label>
                        <div class="col-8 col-lg-10">
                            <p class="col-form-label">: <?= $guest['instansi'] ?></p>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-lg-2 col-form-label" for="input-2">Keperluan</label>
                        <div class="col-8 col-lg-10">
                            <p class="col-form-label">: <?= $guest['keperluan'] ?></p>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-lg-2 col-form-label" for="input-2">Tanggal Diterima</label>
                        <div class="col-8 col-lg-10">
                            <p class="col-form-label">: <?= $guest['created_at'] ?></p>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="text-dark col-4 col-lg-2 col-form-label" for="input-2">Status</label>
                        <div class="col-8 col-lg-4">
                            <select class="form-control" name="status">
                                <option value="Pending" <?= $guest['status'] == 'Pending' ? 'selected' : '' ?>>Pending
                                </option>
                                <option value="Proses" <?= $guest['status'] == 'Proses' ? 'selected' : '' ?>>Proses</option>
                                <option value="Selesai" <?= $guest['status'] == 'Selesai' ? 'selected' : '' ?>>Selesai
                                </option>
                            </select>
                        </div>
                    </div>

                    <footer class="mx-4 my-4 text-right">
                        <button class="btn btn-round btn-custom" type="submit" id="buttonA" onclick="triggerButtonB()">Simpan</button>
                    </footer>

                </form>
            </div>
        </div>
    </div>
    <!-- modal -->

    <!-- detail Modal -->
    <div class="modal fade" id="modal-ubah-<?= $guest['id'] ?>" tabindex="-1">
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
                            <p class="col-form-label">: <?= $guest['nama'] ?></p>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-lg-2 col-form-label" for="input-2">No.Whatsapp</label>
                        <div class="col-8 col-lg-10">
                            <p class="col-form-label">: <?= $guest['telp'] ?></p>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-lg-2 col-form-label" for="input-2">Asal Instansi</label>
                        <div class="col-8 col-lg-10">
                            <p class="col-form-label">: <?= $guest['instansi'] ?></p>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-lg-2 col-form-label" for="input-2">Keperluan</label>
                        <div class="col-8 col-lg-10">
                            <p class="col-form-label">: <?= $guest['keperluan'] ?></p>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4 col-lg-2 col-form-label" for="input-2">Tanggal Diterima</label>
                        <div class="col-8 col-lg-10">
                            <p class="col-form-label">: <?= $guest['created_at'] ?></p>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="text-dark col-4 col-lg-2 col-form-label" for="input-2">Status</label>
                        <div class="col-8 col-lg-10">
                            <p class="col-form-label">: <?= $guest['status'] ?></p>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->

<?php } ?>