<div class="row">
	<div class="col-12">
  		<div class="card card-shadowed px-50 py-30 w-400px mx-auto" style="max-width: 100%">
    		<h5 class="text-uppercase text-center mb-20">Pelaporan Inklusi</h5>
    		<br>

			<form action="<?php echo site_url('auth/login'); ?>" method="POST" role="form">
				<div class="form-group">
					<?php $error_msg_login = isset($errors['login']) ? $errors['login'] : form_error('login'); ?>
			   	<input class="form-control text-center <?php echo (form_error('login') OR isset($errors['login'])) ? 'is-invalid' :''; ?>" name="login" type="text" value="<?php echo set_value('login');?>" placeholder="Username" autocomplete="off" autofocus="autofocus" data-provide="tooltip" data-tooltip-color="danger" data-placement="right" data-original-title="<?php echo $error_msg_login; ?>">
			 	</div>

			 	<div class="form-group">
			 		<?php $error_msg_pwd = isset($errors['password']) ? $errors['password'] : form_error('password'); ?>
			   	<input class="form-control text-center <?php echo (form_error('password') OR isset($errors['password'])) ? 'is-invalid' :''; ?>" type="password" name="password" placeholder="Password" autocomplete="off" data-provide="tooltip" data-tooltip-color="danger" data-placement="right" data-original-title="<?php echo $error_msg_pwd; ?>">
			 	</div>
            <?php 
              if(isset($show_captcha)) {
                  if($show_captcha) {
                     //if ($use_recaptcha) {
              ?>
                <p>Silahkan masukkan kode keamanan pada gambar.<p>
               <?php $error_msg_captcha = isset($errors['captcha']) ? $errors['captcha'] : form_error('captcha'); ?>
                <p class="text-center"><?php echo $captcha_html; ?></p>
                <div class="form-group">
                   <input class="form-control placeholder-no-fix text-center <?php echo (form_error('captcha')) ? 'is-invalid' :''; ?>" autocomplete="off" placeholder="Kode Keamanan" name="captcha" data-provide="tooltip" data-tooltip-color="danger" data-placement="right" data-original-title="<?php echo $error_msg_captcha; ?>"/>
                </div>
              <?php 
                  }
                }
              
              ?>
				<div class="form-group flexbox flex-column flex-md-row">
			  		<label class="custom-control custom-checkbox">
			    		<input type="checkbox" class="custom-control-input" name="remember" >
			    		<span class="custom-control-indicator"></span>
			    		<span class="custom-control-description">Remember me</span>
			  		</label>

			  		<!--a class="text-muted hover-primary fs-13 mt-2 mt-md-0" href="#" >Forgot password?</a-->
				</div>

				<div class="form-group">
			  		<button class="btn btn-bold btn-block btn-primary" type="submit" style="background-color: #005D92;">Login</button>
				</div>
			</form>

   		<!-- <div class="divider">atau</div>
   		<div class="text-center">
   			<a class="btn btn-round btn-block btn-info" href="<?php echo site_url('auth/Register') ?>">Daftar</a>
    		</div> -->
  		</div>

  <!-- <p class="text-center text-muted fs-13 mt-20">Don't have an account? <a class="text-primary fw-500" href="#">Sign up</a></p> -->
	</div>
</div>
<script type="text/javascript">
$(function() {
	$('input.is-invalid').tooltip('show');
});
</script>
