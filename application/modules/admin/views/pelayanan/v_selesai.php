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
                    <a class="btn btn-sm btn-round btn-custom" href="<?= site_url('admin/Pelayanan/export') ?>">Cetak<i
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
                        <th class="font-weight-bold">Keperluan</th>
                        <th class="font-weight-bold">Status</th>
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
                        <td><?= $guest['keperluan'] ?></td>
                        <td>
                            <div class="media-right">
                                <button
                                    class="btn btn-sm btn-bold btn-round 
                    <?php
                    if ($guest['status'] == 'Selesai') {
                        echo 'btn-success';
                    } else {
                        echo 'btn-secondary';
                    } ?>"><?= $guest['status'] ?>
                                </button>
                            </div>
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
<!-- <?php foreach ($guests as $guest) { ?> -->
<!-- <div class="modal fade" id="modal-detail-<?= $guest['id'] ?>" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Detail Ajuan</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="modal-body form-type-round" action="<?php echo site_url('admin/pelayanan/update'); ?>"
                method="post">
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
                    <label class="col-4 col-lg-2 col-form-label" for="input-2">Kantor</label>
                    <div class="col-8 col-lg-10">
                        <p class="col-form-label">: <?= $guest['lokasi'] ?></p>
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
                    <label class="text-dark col-4 col-lg-2 col-form-label" for="input-2">Kategori</label>
                    <div class="col-8 col-lg-4">
                        <select id="StatusSelect" class="form-control" name="kategori">

                            <option value="Layanan" <?= $guest['kategori'] == 'Layanan' ? 'selected' : '' ?>>Layanan
                            </option>
                            <option value="BukuTamu" <?= $guest['kategori'] == 'BukuTamu' ? 'selected' : '' ?>>Buku Tamu
                            </option>

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="text-dark col-4 col-lg-2 col-form-label" for="input-2">Status</label>
                    <div class="col-8 col-lg-4">
                        <select id="StatusSelect" class="form-control" name="status">

                            <option value="Proses" <?= $guest['status'] == 'Proses' ? 'selected' : '' ?>>Proses</option>
                            <option value="Selesai" <?= $guest['status'] == 'Selesai' ? 'selected' : '' ?>>Selesai
                            </option>

                        </select>
                    </div>
                </div>

                <footer class="mx-4 my-4 text-right">
                    <button class="btn btn-round btn-custom" type="submit" id="buttonA"
                        onclick="triggerButtonB()">Simpan</button>
                </footer>

            </form>
        </div>
    </div>
</div> -->
<!-- modal -->

<!-- detail Modal -->
<!-- <div class="modal fade" id="modal-ubah-<?= $guest['id'] ?>" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Detail Ajuan</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="modal-body form-type-round" action="<?php echo site_url('admin/pelayanan/add_note'); ?>"
                method="post">
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
                    <div class="col-8 col-lg-10">
                        <p class="col-form-label">: <?= $guest['status'] ?></p>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="text-dark col-4 col-lg-2 col-form-label">Catatan</label>
                    <div class="col-8 col-lg-10">
                        <textarea id="catatan" name="catatan" class="form-control" rows="5" placeholder="Catatan.."><?= $guest['catatan'] ?></textarea>
                    </div>
                </div>

                <footer class="mx-4 my-4 text-right">
                    <button class="btn btn-round btn-custom" type="submit">Simpan</button>
                </footer>
            </form>
        </div>
    </div>
</div> -->
<!-- modal -->

<!-- <?php } ?> -->

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
                location.reload(); // Memuat ulang halaman setelah status diperbarui
            },
            error: function(xhr, status, error) {
                alert('Terjadi kesalahan saat memperbarui status.');
            }
        });
    }
</script>
