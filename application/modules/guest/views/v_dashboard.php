<div class="col-12">
  <div class="card shadow-2">
    <div class="card-body">
      <h4 class="fw-500">Pengajuan Layanan</h4>

      <div class="card card-bordered card-body">
        <div class="row">
          <div class="form-group col-lg-6">
            <label class="text-dark">Nama</label>
            <input class="form-control" type="text" placeholder="Nama Lengkap">
          </div>
          <div class="form-group col-lg-6">
            <label class="text-dark">No.HP</label>
            <input class="form-control" type="text" placeholder="08xxxxxxxxxx">
          </div>
        </div>

        <div class="row">
          <div class="form-group col-lg-12">
            <label class="text-dark">Asal Instansi</label>
            <select class="form-control" id="kategoriSelect" onchange="tampilkanData()">
              <option>Pilih Kategori</option>
              <option>Internal</option>
              <option>Eksternal</option>
            </select>
          </div>
        </div>

        <div class="row" id="hasil">
          <!-- Data akan ditampilkan di sini saat dropdown berubah -->
        </div>

        <div class="row">
          <div class="form-group col-lg-12">
            <label class="text-dark">Keperluan</label>
            <textarea class="form-control" rows="5" placeholder="Catatan.."></textarea>
          </div>
        </div>
      </div>
      <footer class="mx-4 my-4 text-right">
        <a class="btn btn-round btn-custom" type="submit" href="">Submit</a>
      </footer>
    </div>
  </div>
</div>