<?php
// sediakan nohp target
$nohp = hp('085322471629');
// atur pesan dengan helper text urlencode
$message = '&text=' . urlencode('Pengajuan anda sedang dalam proses');
// cek user_agent / device yang digunakan user
// kalau mobile maka pakai api.whatsapp.com
$linkWA = $this->agent->is_mobile() ? 'https://api.whatsapp.com/send?phone=' . $nohp . $message : 'https://web.whatsapp.com/send?phone=' . $nohp . $message;
?>

<div class="col-12">
    <a href="<?= site_url('guest/dashboard') ?>" class="d-flex justify-content-center mb-5">
        <div class="m-1"><img src="<?= asset_path('/img/logo-hd-bsi.svg', '_theme_') ?>" alt="logo icon"
                style="width: 32px;"></div>
        <span class="text1 d-flex align-self-center">Helpdesk BSI.</span>
    </a>
    <div class="card shadow-2">
        <form id="submissionForm" class="card-body" action="<?php echo site_url('guest/dashboard/store'); ?>" method="post">
            <h4 class="fw-500">Pengajuan Layanan</h4>

            <div class="card card-bordered card-body">

                <div class="row">
                    <div class="form-group col-lg-6">
                        <label class="text-dark require">Nama</label>
                        <input id="nama" name="nama" class="form-control" type="text"
                            placeholder="Nama Lengkap" required>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group col-lg-6">
                        <label class="text-dark require">No.HP</label>
                        <input id="telp" name="telp" class="form-control" type="text"
                            placeholder="08xxxxxxxxxx" required>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="row">

                    <div class="form-group col-lg-12">
                        <label class="text-dark require">Unit BSI</label>
                        <select class="form-control" id="unit_bsi" name="unit_bsi" required>
                            <option value="">Pilih Unit BSI</option>
                            <?php foreach ($units as $unit) : ?>
                                <option value="BSI <?= $unit->id ?>"><?= $unit->name ?></option>
                            <?php endforeach ?>
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                </div>
                <div class="row" id="nama_instansi">

                    <div class="form-group col-lg-6">
                        <label class="text-dark require">Asal Instansi</label>
                        <select class="form-control" id="kategoriSelect" onchange="tampilkanDatas()" name="kategori"
                            required>
                            <option value="">Pilih Kategori</option>
                            <option value="Internal">Internal</option>
                            <option value="Eksternal">Eksternal</option>
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>

                    <div class="form-group col-lg-6">
                        <label class="text-dark require">Jenis Keperluan</label>
                        <select class="form-control" id="jenis_keperluan" name="jenis_keperluan" onchange="tampilkanKeperluan()" required>
                            <option value="">Pilih Jenis Keperluan</option>
                            <option value="Teknis">Teknis</option>
                            <option value="Aduan">Aduan</option>
                            <option value="Tamu">Tamu</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>


                </div>
                <div class="row">
                    <div id="v_internal" class="form-group col-lg-6" style="display: none;">
                        <label class="text-dark">Instansi Internal</label>
                        <select id="internal" name="internal" class="form-control">
                            <option value="">Pilih Instansi Internal</option>
                            <option value="Biro Sistem Informasi">Biro Sistem Informasi</option>
                            <option value="Biro Sumber Daya Manusia">Biro Sumber Daya Manusia</option>
                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div id="v_external" class="form-group col-lg-6" style="display: none;">
                        <label class="text-dark">Instansi Eksternal</label>
                        <input id="external" name="external" class="form-control" type="text">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group col-lg-6" style="display: none;" id="field-keperluan">
                        <label class="text-dark require">Keperluan</label>
                        <textarea class="form-control" name="keperluan" id="keperluan" rows="3"></textarea>
                        <div class="invalid-feedback"></div>
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

    function tampilkanKeperluan() {
        var jenis_keperluan = document.getElementById("jenis_keperluan").value;
        var keperluan = document.getElementById("field-keperluan");
        if (jenis_keperluan === "Lainnya") {
            keperluan.style.display = "block";
        } else {
            keperluan.style.display = "none";
        }
    }
</script>