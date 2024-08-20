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
                    <button class="btn btn-sm btn-round btn-custom" onclick="exportToExcel('table1', 'data_eoffice.xlsx')">Cetak<i
                            class="ml-2 bi bi-printer-fill"></i></button>
                </div>
            </div>

            <table id="table1" class="table table-separated table-striped table-responsive-sm" data-provide="datatables"
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
                                    <button class="btn btn-flat btn-sm btn-bold btn-round btn-success"><?= $guest['status'] ?>
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