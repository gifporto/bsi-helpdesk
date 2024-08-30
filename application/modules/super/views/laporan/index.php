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
                    <button class="btn btn-sm btn-round btn-custom" onclick="exportToExcel('guestsTable', 'laporan.xlsx')">Cetak<i
                            class="ml-2 bi bi-printer-fill"></i></button>
                </div>
            </div>
            <table id="guestsTable" class="table table-separated table-striped table-responsive-sm"
                data-provide="datatables" data-scroll-collapse="true" cellspacing="0">
                <thead class="bg-color-primary1">
                    <tr>
                        <th class="font-weight-bold">Tanggal</th>
                        <th class="font-weight-bold">Jam</th>
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
                        <tr data-unit="<?= $guest['unit_bsi'] ?>" data-jenis="<?= $guest['jenis_keperluan'] ?>">
                            <?php
                            $date = new DateTime($guest['created_at']);
                            $formatted_date = $date->format('d F Y');
                            $formatted_time = $date->format('H:i');
                            $iso_date = $date->format(DateTime::ATOM);
                            ?>
                            <td>
                                <?= $formatted_date ?>
                            </td>
                            <td>
                                <?= $formatted_time ?>
                            </td>
                            <td><?= $guest['nama'] ?></td>
                            <td><?= $guest['instansi'] ?></td>
                            <td><?= $guest['unit_bsi'] ?></td>
                            <td><?= $guest['jenis_keperluan'] ?></td>
                            <td><?= $guest['keperluan'] ?></td>
                            <td>
                                <div class="media-right">
                                    <button
                                        class="btn btn-flat btn-sm btn-bold btn-round btn-success"><?= $guest['status'] ?>
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

    function exportToExcel(tableId, fileName) {
        var wb = XLSX.utils.book_new();
        var ws = XLSX.utils.table_to_sheet(document.getElementById(tableId));
        XLSX.utils.book_append_sheet(wb, ws, 'Data');
        XLSX.writeFile(wb, fileName);
    }
</script>