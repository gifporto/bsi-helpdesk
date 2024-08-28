<!-- <?php phpinfo(); ?> -->

<!-- table -->
<div class="col-lg-12">

<?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger">
            <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php endif; ?>
    
    <div class="card shadow-2">
        <div class="card-body">

            <div class="flexbox mb-20">
                <div class="mb-2 d-flex justify-content-start">
                    <div class="form-group mr-1">
                        <select id="unitFilter" data-provide="selectpicker" data-lang="en_US" title="Unit" class="form-control">
                            <option value="">Semua</option>
                            <?php foreach ($units as $unit) : ?>
                                <option value="<?= $unit['name'] ?>"><?= $unit['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group mr-1">
                        <select id="jenisKeperluanFilter" data-provide="selectpicker" data-lang="en_US" title="Jenis Keperluan" class="form-control">
                            <option value="">Semua</option>
                            <option value="Teknis">Teknis</option>
                            <option value="Aduan">Aduan</option>
                            <option value="Tamu">Tamu</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group mr-1 d-flex align-self-center">
                        <button id="filterBtn" class="btn btn-custom">Filter</button>
                    </div>
                </div>

                <div class="ml-2">
                    <a class="btn btn-sm btn-round btn-custom" href="<?= site_url('admin/Pelayanan/export'); ?>">Cetak<i
                            class="ml-2 bi bi-printer-fill"></i></a>
                </div>
            </div>

            <table id="guestsTable" class="table table-separated table-striped table-responsive-sm" data-provide="datatables"
                data-scroll-collapse="true" cellspacing="0">
                <thead class="bg-color-primary1">
                    <tr>
                        <th class="font-weight-bold">Tanggal</th>
                        <th class="font-weight-bold">Nama</th>
                        <th class="font-weight-bold">Instansi</th>
                        <th class="font-weight-bold">Unit BSI</th>
                        <th class="font-weight-bold">Jenis Keperluan</th>
                        <th class="font-weight-bold">Keperluan</th>
                        <th class="font-weight-bold">Status</th>
                        <th class="font-weight-bold">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($guests as $guest) { ?>
                        <tr data-unit="<?= $guest['unit_bsi'] ?>" data-jenis="<?= $guest['jenis_keperluan'] ?>">
                            <td>
                                <?php
                                $date = new DateTime($guest['created_at']);
                                $formatted_date = $date->format('d F Y H:i');
                                ?>
                                <?= $formatted_date ?>
                            </td>
                            <td><?= $guest['nama'] ?></td>
                            <td><?= $guest['instansi'] ?></td>
                            <td><?= $guest['unit_bsi'] ?></td>
                            <td><?= $guest['jenis_keperluan'] ?></td>
                            <td><?= $guest['keperluan'] ?></td>
                            <td>
                                <div class="media-right">
                                    <button class="btn btn-flat btn-sm btn-bold btn-round btn-secondary"><?= $guest['status'] ?></button>
                                </div>
                            </td>
                            <td class="text-center d-flex">
                                <?php if ($guest['jenis_keperluan'] != 'Tamu') { ?>

                                    <form action="<?php echo site_url('staff/pelayanan/update_status'); ?>" method="post">
                                        <input type="hidden" name="id" value="<?= $guest['id'] ?>">
                                        <input type="hidden" name="status" value="Respon">
                                        <input type="hidden" name="redirect_to" value="staff/pelayanan/index_pending">
                                        <input type="hidden" name="telp" value="<?= $guest['telp'] ?>">
                                        <input type="hidden" name="pesan" value="Pelayanan anda sudah direspon! ^_^">

                                        <button class="mx-1 btn btn-round btn-info btn-square text-center" title="Respon">
                                            <i class="bi bi-hand-thumbs-up"></i>
                                        </button>
                                    </form>

                                    <form action="<?php echo site_url('staff/pelayanan/update_status'); ?>" method="post">
                                        <input type="hidden" name="id" value="<?= $guest['id'] ?>">
                                        <input type="hidden" name="status" value="Proses">
                                        <input type="hidden" name="redirect_to" value="staff/pelayanan/index_pending">
                                        <input type="hidden" name="telp" value="<?= $guest['telp'] ?>">
                                        <input type="hidden" name="pesan" value="Pelayanan anda sedang diproses! ^_^">

                                        <button class="mx-1 btn btn-round btn-primary btn-square text-center" title="Proses">
                                            <i class="fa fa-hourglass-1"></i>
                                        </button>
                                    </form>
                                <?php } ?>

                                <form action="<?php echo site_url('staff/pelayanan/update_status'); ?>" method="post">
                                    <input type="hidden" name="id" value="<?= $guest['id'] ?>">
                                    <input type="hidden" name="status" value="Selesai">
                                    <input type="hidden" name="redirect_to" value="staff/pelayanan/index_pending">
                                    <input type="hidden" name="telp" value="<?= $guest['telp'] ?>">
                                    <input type="hidden" name="pesan" value="Pelayanan anda sudah selesai! Terima Kasih ^_^">

                                    <button class="mx-1 btn btn-round btn-success btn-square text-center" title="Selesai">
                                        <i class="fa fa-check"></i>
                                    </button>
                                </form>

                                <?php if ($guest['jenis_keperluan'] != 'Tamu') { ?>
                                    <button class="mx-1 btn btn-round btn-warning btn-square text-center" data-toggle="modal"
                                        data-target="#modal_pesan_<?= $guest['id'] ?>" title="Pesan">
                                        <i class="fa fa-commenting-o"></i>
                                    </button>

                                <?php } ?>

                                <button class="mx-1 btn btn-round  btn-danger btn-square text-center" onclick="destroy(<?= $guest['id'] ?>)" title="Hapus"><i class="fa fa-close"></i></button>
                                <!-- btn-round -->
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php foreach ($guests as $guest) : ?>
    <div class="modal fade" id="modal_pesan_<?= $guest['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="modalCreateLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createUserModalLabel">Kirim Pesan WhatsApp</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo site_url('staff/pelayanan/send_wa'); ?>" method="post">
                    <div class="modal-body">
                        <input type="hidden" name="redirect_to" value="staff/pelayanan/index_pending">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="name" value="<?= $guest['nama'] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="telp">Telp</label>
                            <input type="text" class="form-control" name="telp" value="<?= $guest['telp'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea class="form-control" name="pesan" id="pesan" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary btn-round" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-sm btn-round btn-custom">Kirim Pesan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>

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

    $(document).ready(function() {
        $('#buttonA').hide();

        $('#catatan').on('input', function() {
            if ($(this).val().trim() !== '') {
                $('#buttonA').show();
            } else {
                $('#buttonA').hide();
            }
        });
    });

    function updateStatus(id, status) {
        $.ajax({
            url: '<?= site_url('staff/Pelayanan/update_status') ?>',
            type: 'POST',
            data: {
                id: id,
                status: status
            },
            success: function(response) {
                location.reload();
            },
            error: function(xhr, status, error) {
                alert('Terjadi kesalahan saat memperbarui status.');
            }
        });
    }

    function destroy(id) {
        if (confirm('Apakah Anda yakin ingin menghapus tamu ini?')) {
            $.ajax({
                url: '<?= site_url('staff/Pelayanan/destroy') ?>',
                type: 'POST',
                data: {
                    id: id,
                },
                success: function(response) {
                    location.reload();
                },
                error: function(xhr, status, error) {
                    alert('Terjadi kesalahan saat menghapus data.');
                }
            });
        }
    }
</script>