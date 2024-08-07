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
        <form id="submissionForm" class="card-body" action="<?php echo site_url('guest/dashboard/store'); ?>"
            method="post">
            <h4 class="fw-500">Pengajuan Layanan</h4>

            <div class="card card-bordered card-body">
                <div class="row">
                    <input type="text" id="lokasi" name="lokasi" value="<?= htmlspecialchars($lokasi) ?>" hidden>
                    <div class="form-group col-lg-6">
                        <label class="text-dark">Nama</label>
                        <input id="nama" name="nama" class="form-control" type="text" placeholder="Nama Lengkap">
                        <div class="invalid-feedback" id="errorNama"></div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label class="text-dark">No.HP</label>
                        <input id="telp" name="telp" class="form-control" type="number" placeholder="08xxxxxxxxxx">
                        <div class="invalid-feedback" id="errorTelp"></div>
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
                        <div class="invalid-feedback" id="errorKategori"></div>
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
                        <div class="invalid-feedback" id="errorInstansi"></div>
                    </div>

                    <div id="v_external" class="form-group col-lg-12">
                        <label class="text-dark">Instansi Eksternal</label>
                        <input id="external" name="external" class="form-control" type="text">
                        <div class="invalid-feedback" id="errorExternal"></div>
                    </div>

                </div>

                <div class="row">
                    <div class="form-group col-lg-12">
                        <label class="text-dark">Keperluan</label>
                        <textarea id="keperluan" name="keperluan" class="form-control" rows="5"
                            placeholder="Catatan.."></textarea>
                        <div class="invalid-feedback" id="errorKeperluan"></div>
                    </div>
                </div>
            </div>
            <footer class="mx-4 my-4 text-right">
                <button class="btn btn-round btn-custom" type="submit">Submit</button>
            </footer>
        </form>
    </div>
</div>

<script>
//internal or eksternal
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

// validasi kolom input berubah warna
function validateInput(inputId, errorId, condition, message) {
    var input = document.getElementById(inputId);
    var error = document.getElementById(errorId);

    if (condition) {
        input.classList.remove('is-invalid');
        input.classList.add('is-valid-custom');
        error.innerHTML = '';
    } else {
        input.classList.remove('is-valid-custom');
        input.classList.add('is-invalid');
        error.innerHTML = message;
    }
}

// validasi menampilkan teks dibawah kolom input
document.getElementById('submissionForm').addEventListener('submit', function(event) {
    event.preventDefault();
    var isValid = true;

    var nama = document.getElementById('nama').value.trim();
    var telp = document.getElementById('telp').value.trim();
    var kategori = document.getElementById('kategoriSelect').value.trim();
    var instansi = kategori === 'Internal' ? document.getElementById('instansi').value.trim() : '';
    var external = kategori === 'Eksternal' ? document.getElementById('external').value.trim() : '';
    var keperluan = document.getElementById('keperluan').value.trim();

    validateInput('nama', 'errorNama', nama !== '', 'Nama tidak boleh kosong.');
    validateInput('telp', 'errorTelp', telp !== '', 'No.HP tidak boleh kosong.');
    validateInput('kategoriSelect', 'errorKategori', kategori !== '', 'Asal Instansi tidak boleh kosong.');
    if (kategori === 'Internal') {
        validateInput('instansi', 'errorInstansi', instansi !== '', 'Instansi Internal tidak boleh kosong.');
    }
    if (kategori === 'Eksternal') {
        validateInput('external', 'errorExternal', external !== '', 'Instansi Eksternal tidak boleh kosong.');
    }
    validateInput('keperluan', 'errorKeperluan', keperluan !== '', 'Keperluan tidak boleh kosong.');

    isValid = document.querySelectorAll('.is-invalid').length === 0;

    if (isValid) {
        this.submit();
    }
});

// menghilangkan validasi saat kolom terisi
document.querySelectorAll('input, select, textarea').forEach(function(element) {
    element.addEventListener('input', function() {
        var inputId = this.id;
        var errorId = 'error' + inputId.charAt(0).toUpperCase() + inputId.slice(1);
        var value = this.value.trim();

        if (inputId === 'kategoriSelect') {
            validateInput(inputId, errorId, value !== '', 'Asal Instansi tidak boleh kosong.');
        } else if (inputId === 'instansi') {
            validateInput(inputId, errorId, value !== '', 'Instansi Internal tidak boleh kosong.');
        } else if (inputId === 'external') {
            validateInput(inputId, errorId, value !== '', 'Instansi Eksternal tidak boleh kosong.');
        } else if (inputId === 'keperluan') {
            validateInput(inputId, errorId, value !== '', 'Keperluan tidak boleh kosong.');
        } else {
            validateInput(inputId, errorId, value !== '', inputId.charAt(0).toUpperCase() + inputId
                .slice(1) + ' tidak boleh kosong.');
        }
    });
});
</script>