


<div class="row">
	<div class="col-12">
	<div class="card card-shadowed px-50 py-30 w-800px mx-auto">
  <?php  
  
  if($this->session->flashdata('msg_register')){ //pesan alert proses
  $msg = $this->session->flashdata('msg_register');
?>
<div class="alert alert-<?php echo $msg['type']; ?> alert-dismissible fade show" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
   <?php echo $msg['text']; ?>
</div>
<?php } ?>
              <h4 class="card-title"><strong>Form Register</strong></h4>

              <div class="card-body">
                <form data-provide="wizard" novalidate="true" method="post">
                  <ul class="nav nav-process nav-process-circle">
                    <li class="nav-item">
                      <span class="nav-title">Data Pribadi</span>
                      <a class="nav-link" data-toggle="tab" href="#wizard-validate-1"></a>
                    </li>
                    <li class="nav-item">
                      <span class="nav-title">Data Pendidikan</span>
                      <a class="nav-link" data-toggle="tab" href="#wizard-validate-2"></a>
                    </li>

                    <li class="nav-item">
                      <span class="nav-title">Data Pekerjaan</span>
                      <a class="nav-link" data-toggle="tab" href="#wizard-validate-3"></a>
                    </li>

                    <li class="nav-item">
                      <span class="nav-title">Data Akun</span>
                      <a class="nav-link" data-toggle="tab" href="#wizard-validate-4"></a>
                    </li>

                  
                  </ul>


                  <div class="tab-content">
                    <div class="tab-pane fade active show" id="wizard-validate-1" data-provide="validation">
                      <br><br>
                      <p class="text-center fs-35 text-muted">Data<strong class="text-primary">Pribadi</strong></p>
                      <p class="text-center text-gray">Isikan data pribadi anda berdasarkan inputan di bawah ini</p>
                      <hr class="w-100px">
                      
                      <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input name="fullname" class="form-control" type="text" required>
                        <div class="form-control-feedback"></div>
                      </div>
                       <div class="form-group">
                        <label>NIK</label>
                        <input name="nik" class="form-control" type="text" required>
                        <div class="form-control-feedback"></div>
                      </div>
                      <div class="form-row">
                      	<div class="form-group col-md-6">
	                        <label>Tempat Lahir</label>
	                        <input name="tempat_lahir" class="form-control" type="text" required>
	                        <div class="form-control-feedback"></div>
	                     </div>
	                     <div class="form-group col-md-6">
                        	<label>Tanggal Lahir</label>
                        	<input name="tgl_lahir" class="form-control" data-provide="datepicker" data-date-today-highlight="true" data-date-format="dd/mm/yyyy" type="text" required>
                        	<div class="form-control-feedback"></div>
                      	</div>	
                      </div>
                      <div class="form-row">
                      	<div class="form-group col-md-6">
	                        <label>Jenis Kelamin</label>
	                        <select class="form-control" name="jns_kelamin">
	                        	<option value="L">Laki-laki</option>
	                        	<option value="P">Perempuan</option>
	                        </select>
	                        <div class="form-control-feedback"></div>
	                     </div>	
                      </div>
                      <div class="form-group">
                        <label>Alamat</label>
                        <input name="alamat" class="form-control" type="text" required>
                        <div class="form-control-feedback"></div>
                      </div>
                      <div class="form-row">
                      	<div class="form-group col-md-6">
	                        <label>Telepon</label>
	                        <input name="telp" class="form-control" type="text" required>
	                        <div class="form-control-feedback"></div>
	                     </div>
	                     <div class="form-group col-md-6">
                        	<label>HP</label>
                        	<input name="hp" class="form-control" type="text" required>
                        	<div class="form-control-feedback"></div>
                      	</div>	
                      </div>
                      
                      

                    </div>

                     <div class="tab-pane fade" id="wizard-validate-2" data-provide="validation">
                      <br><br>
                      <p class="text-center fs-35 text-muted">Data <strong class="text-primary">Pendidikan</strong></p>
                      <p class="text-center text-gray">Isikan data pendidikan anda di bawah ini</p>
                      <hr class="w-100px">
                      

                      <div class="form-group">
                        <label>Nama Sekolah/Universitas</label>
                        <input name="pendidikan" class="form-control" type="text" required>
                        <div class="form-control-feedback"></div>
                      </div>
                      <div class="form-group">
                        <label>Jurusan</label>
                        <input name="jurusan" class="form-control" type="text" required>
                        <div class="form-control-feedback"></div>
                      </div>
                      <div class="form-group">
                        <label>Jenjang</label>
                        <select name="jenjang" class="form-control" required>
                            <option value="">--PILIH JENJANG--</option>
                            <?php foreach ($jenjang as $jjg) {
                              ?>
                               <option value="<?=$jjg['id']?>"><?=$jjg['jenjang']." (".$jjg['singkatan'].")"?></option>
                            <?php  } ?>
                        </select>
                        <div class="form-control-feedback"></div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label>Tahun Lulus</label>
                          <input name="tahun_lulus" class="form-control" type="text" required>
                          <div class="form-control-feedback"></div>
                       </div>
                       
                      </div>
                       

                    </div>




                    <div class="tab-pane fade" id="wizard-validate-3" data-provide="validation">
                      <br><br>
                      <p class="text-center fs-35 text-muted">Data <strong class="text-primary">Pekerjaan</strong></p>
                      <p class="text-center text-gray">Isikan data pekerjaan anda di bawah ini</p>
                      <hr class="w-100px">
                      

                     <div class="form-group">
                        <label>Nama Lembaga / Perusahaan</label>
                        <input name="instansi" class="form-control" type="text" required>
                        <div class="form-control-feedback"></div>
                     </div>
                     <div class="form-group">
                        <label>Jabatan</label>
                        <input name="jabatan" class="form-control" type="text" required>
                        <div class="form-control-feedback"></div>
                     </div>
                     <div class="form-group">
                        <label>Alamat</label>
                        <input name="alamat_instansi" class="form-control" type="text" required>
                        <div class="form-control-feedback"></div>
                     </div>
                     <div class="form-row">
                      	<div class="form-group col-md-6">
	                        <label>Telepon</label>
	                        <input name="telp_instansi" class="form-control" type="text" required>
	                        <div class="form-control-feedback"></div>
	                     </div>
                      </div>
	                     

                    </div>



                    <div class="tab-pane fade" id="wizard-validate-4" data-provide="validation">
                      <br><br>
                      <p class="text-center fs-35 text-muted">Data <strong class="text-primary">Akun</strong></p>
                      <p class="text-center text-gray">Isikan data akun anda di bawah ini</p>
                      <hr class="w-100px">
                      <br>

                      <div class="form-group">
                        <label>Username</label>
                        <input name="username" class="form-control" type="text" required>
                        <div class="form-control-feedback"></div>
                      </div>

                      <div class="form-group">
                        <label>Email </label>
                        <input name="email" class="form-control" type="email" required>
                        <div class="form-control-feedback"></div>
                      </div>

                      <div class="form-row"> 
	                      <div class="form-group col-md-4">
	                        <label>Password</label>
	                        <input name="password" class="form-control" type="password" required>
	                        <div class="form-control-feedback"></div>
	                      </div>
	                      <div class="form-group col-md-4">
	                        <label>Ulangi Password</label>
	                        <input name="re-password"  class="form-control" type="password" required>
	                        <div class="form-control-feedback"></div>
	                      </div>

                      </div>

                    </div>



                    

                  <hr>

                  <div class="flexbox">
                    <button class="btn btn-secondary" data-wizard="prev" type="button">Back</button>
                    <button class="btn btn-secondary" data-wizard="next" type="button">Next</button>
                    <button class="btn btn-primary d-none" data-wizard="finish" type="submit">Finish</button>
                  </div>
                </form>
              </div>
            </div>
	</div>
</div>