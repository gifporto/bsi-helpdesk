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
                    <a class="btn btn-sm btn-round btn-custom" href="<?= site_url('admin/Pelayanan/export'); ?>">Cetak<i
                            class="ml-2 bi bi-printer-fill"></i></a>
                </div>
            </div>

            <table class="table table-separated table-striped table-responsive-sm" data-provide="datatables"
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
                            <td><?= $guest['unit_bsi'] ?></td>
                            <td><?= $guest['jenis_keperluan'] ?></td>
                            <td><?= $guest['keperluan'] ?></td>
                            <td>
                                <div class="media-right">
                                    <button class="btn btn-flat btn-sm btn-bold btn-round btn-warning"><?= $guest['status'] ?></button>
                                </div>
                            </td>
                            <td class="text-center d-flex">
                                <button class="btn btn-round btn-success btn-square text-center" onclick="updateStatus(<?= $guest['id'] ?>, 'Selesai')" title="Selesai"><i class="fa fa-check"></i></button>
                                <button class="mx-2 btn btn-round btn-warning btn-square text-center" data-toggle="modal" data-target="#modal_pesan_<?= $guest['id'] ?>" title="Pesan"><i class="fa fa-commenting-o"></i></button>
                                <button class="btn btn-round btn-danger btn-square text-center" onclick="destroy(<?= $guest['id'] ?>)" title="Hapus"><i class="fa fa-close"></i></button>
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
                        <input type="hidden" name="redirect_to" value="staff/pelayanan/index_proses">
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