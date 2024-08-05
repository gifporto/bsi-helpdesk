<?php
// sediakan nohp target
$nohp = hp('085322471629');
// atur pesan dengan helper text urlencode
$message = '&text=' . urlencode('Pengajuan anda sedang dalam proses');
// cek user_agent / device yang digunakan user
// kalau mobile maka pakai api.whatsapp.com
if ($this->agent->is_mobile()) $linkWA = 'https://api.whatsapp.com/send?phone=' . $nohp . $message;
// tapi kalau desktop pakai web.whatsapp.com
else $linkWA = 'https://web.whatsapp.com/send?phone=' . $nohp . $message;
?>

<div class="col-12">
    <div class="card shadow-2">
        <form id="submissionForm" class="card-body" action="<?php echo site_url('guest/dashboard/store'); ?>" method="post">
            <h4 class="fw-500">Pengajuan Layanan</h4>

            <div class="card card-bordered card-body">
                <div class="row">
                    <div class="form-group col-lg-6">
                        <label class="text-dark">Nama</label>
                        <input id="nama" name="nama" class="form-control" type="text" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group col-lg-6">
                        <label class="text-dark">No.HP</label>
                        <input id="telp" name="telp" class="form-control" type="text" placeholder="08xxxxxxxxxx">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-lg-12">
                        <label class="text-dark">Asal Instansi</label>
                        <select class="form-control" id="kategoriSelect" onchange="tampilkanDatas()">
                            <option value="">Pilih Kategori</option>
                            <option value="Internal">Internal</option>
                            <option value="Eksternal">Eksternal</option>
                        </select>
                    </div>
                </div>

                <div class="row" id="nama_instansi">

                    <div id="v_internal" class="form-group col-lg-12">
                        <label class="text-dark">Instansi Internal</label>
                        <select id="instansi" name="instansi" class="form-control">
                            <option value="">Pilih Instansi</option>
                            <option value="Biro Sistem Informasi">Biro Sistem Informasi</option>
                            <option value="Biro Sumber Daya Manusia">Biro Sumber Daya Manusia</option>
                        </select>
                    </div>

                    <div id="v_external" class="form-group col-lg-12">
                        <label class="text-dark">Instansi Eksternal</label>
                        <input id="external" name="external" class="form-control" type="text">
                    </div>

                </div>

                <div class="row">
                    <div class="form-group col-lg-12">
                        <label class="text-dark">Keperluan</label>
                        <textarea id="keperluan" name="keperluan" class="form-control" rows="5"
                            placeholder="Catatan.."></textarea>
                    </div>
                </div>
            </div>
            <footer class="mx-4 my-4 text-right">
                <button class="btn btn-round btn-custom" type="submit">Submit</button>
            </footer>
        </form>
    </div>
</div>

<div id="errorModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Lengkapi Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="errorMessage"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-round btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
function tampilkanDatas() {
    var kategori = document.getElementById("kategoriSelect").value;
    var internal = document.getElementById("v_internal");
    var external = document.getElementById("v_external");
    if (kategori === "Internal") {
        internal.style.display = "block";
        external.style.display = "none";
    } else if (kategori === "Eksternal") {
        internal.style.display = "none";
        external.style.display = "block";
    } else {
        internal.style.display = "none";
        external.style.display = "none";
    }
}

document.getElementById('submissionForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var isValid = true;
    var errorMessage = '';

    var nama = document.getElementById('nama').value.trim();
    var telp = document.getElementById('telp').value.trim();
    var kategori = document.getElementById('kategoriSelect').value.trim();
    var instansi = kategori === 'Internal' ? document.getElementById('instansi').value.trim() : '';
    var external = kategori === 'Eksternal' ? document.getElementById('external').value.trim() : '';
    var keperluan = document.getElementById('keperluan').value.trim();

    if (nama === '') {
        isValid = false;
        errorMessage += 'Nama tidak boleh kosong.<br>';
    }
    if (telp === '') {
        isValid = false;
        errorMessage += 'No.HP tidak boleh kosong.<br>';
    }
    if (kategori === '') {
        isValid = false;
        errorMessage += 'Asal Instansi tidak boleh kosong.<br>';
    }
    if (kategori === 'Internal' && instansi === '') {
        isValid = false;
        errorMessage += 'Instansi Internal tidak boleh kosong.<br>';
    }
    if (kategori === 'Eksternal' && external === '') {
        isValid = false;
        errorMessage += 'Instansi Eksternal tidak boleh kosong.<br>';
    }
    if (keperluan === '') {
        isValid = false;
        errorMessage += 'Keperluan tidak boleh kosong.<br>';
    }

    if (!isValid) {
        document.getElementById('errorMessage').innerHTML = errorMessage;
        $('#errorModal').modal('show');
    } else {
        this.submit();
    }
});
</script>
