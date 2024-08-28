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
                    <button class="btn btn-sm btn-round btn-custom" onclick="exportToExcel('table1', 'data_eoffice.xlsx')">Cetak<i
                            class="ml-2 bi bi-printer-fill"></i></button>
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
                                    <button class="btn btn-flat btn-sm btn-bold btn-round btn-success"><?= $guest['status'] ?>
                                    </button>
                                </div>
                            </td>
                            <td class="text-center d-flex">
                                <button class="mx-1 btn btn-round btn-warning btn-square text-center" data-toggle="modal" data-target="#modal_pesan_<?= $guest['id'] ?>" title="Pesan"><i class="fa fa-commenting-o"></i></button>
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
                        <input type="hidden" name="redirect_to" value="staff/pelayanan/index_selesai">
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

    function updateStatus(id, status) {
        $.ajax({
            url: '<?= site_url('admin/Pelayanan/update_status') ?>',
            type: 'POST',
            data: {
                id: id,
                status: status
            },
            success: function(response) {
                location.reload(); // Memuat ulang halaman setelah status diperbarui
            },
            error: function(xhr, status, error) {
                alert('Terjadi kesalahan saat memperbarui status.');
            }
        });
    }

    function exportToExcel(tableId, fileName) {
        var wb = XLSX.utils.book_new();
        var ws = XLSX.utils.table_to_sheet(document.getElementById(tableId));
        XLSX.utils.book_append_sheet(wb, ws, 'Data');
        XLSX.writeFile(wb, fileName);
    }
</script>