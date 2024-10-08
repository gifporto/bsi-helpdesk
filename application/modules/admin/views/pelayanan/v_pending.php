<!-- table -->
<div class="col-lg-12">  
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
                            <td>
                                <a class="btn btn-flat btn-primary" data-toggle="modal" data-target="#modal_jenis_keperluan_<?= $guest['id'] ?>">
                                    <?= $guest['jenis_keperluan'] ?>
                                </a>
                            </td>
                            <td><?= $guest['keperluan'] ?></td>
                            <td>
                                <div class="media-right">
                                    <button class="btn btn-flat btn-sm btn-bold btn-round 
                    <?php
                        if ($guest['status'] == 'ACC') {
                            echo 'btn-success';
                        } else {
                            echo 'btn-secondary';
                        } ?>"><?= $guest['status'] ?>
                                    </button>
                                </div>
                            </td>
                            <td class="text-center d-flex">
                                <button class="btn btn-round btn-success btn-square text-center mx-1" onclick="updateStatus(<?= $guest['id'] ?>, 'Selesai')" title="Selesai"><i class="fa fa-check"></i></button>
                                <?php if ($guest['jenis_keperluan'] != 'Tamu') { ?>
                                    <button class="btn btn-round btn-info btn-square text-center mx-1" onclick="updateStatus(<?= $guest['id'] ?>, 'Respon')" title="Respon"><i class="bi bi-hand-thumbs-up"></i></button>
                                <?php } ?>
                                <button class="btn btn-round btn-danger btn-square text-center ml-1" onclick="destroy(<?= $guest['id'] ?>)" title="Hapus"><i class="fa fa-close"></i></button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php foreach ($guests as $guest) : ?>
    <div class="modal fade" id="modal_jenis_keperluan_<?= $guest['id'] ?>" tabindex="-1" role="dialog"
        aria-labelledby="modalCreateLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createUserModalLabel">Ubah Keperluan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo site_url('admin/pelayanan/update_jenis_keperluan'); ?>" method="post">
                    <div class="modal-body">
                        <input type="hidden" name="redirect_to" value="admin/pelayanan/index_pending">
                        <input type="hidden" name="guest_id" value="<?= $guest['id'] ?>">
                        <div class="form-group">
                            <label class="text-dark require">Keperluan</label>
                            <select class="form-control" id="jenis_keperluan" name="jenis_keperluan" required>
                                <option value="">Pilih Keperluan</option>
                                <option value="Teknis" <?= $guest['jenis_keperluan'] == 'Teknis' ? 'selected' : '' ?>>Teknis</option>
                                <option value="Aduan" <?= $guest['jenis_keperluan'] == 'Aduan' ? 'selected' : '' ?>>Aduan</option>
                                <option value="Tamu" <?= $guest['jenis_keperluan'] == 'Tamu' ? 'selected' : '' ?>>Tamu</option>
                                <option value="Lainnya" <?= $guest['jenis_keperluan'] == 'Lainnya' ? 'selected' : '' ?>>Lainnya</option>
                            </select>
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary btn-round"
                            data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-sm btn-round btn-custom">Ubah Keperluan</button>
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
</script>

<script>
    $(document).ready(function() {
        $('#buttonA').hide(); // Sembunyikan tombol saat halaman pertama kali dimuat

        $('#catatan').on('input', function() {
            // Periksa jika kolom catatan tidak kosong
            if ($(this).val().trim() !== '') {
                $('#buttonA').show(); // Tampilkan tombol jika ada teks
            } else {
                $('#buttonA').hide(); // Sembunyikan tombol jika kosong
            }
        });
    });
</script>

<script>
    function updateStatus(id, status) {
        $.ajax({
            url: '<?= site_url('admin/Pelayanan/update_status') ?>',
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
                url: '<?= site_url('admin/Pelayanan/destroy') ?>',
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