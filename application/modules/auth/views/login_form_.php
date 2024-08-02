<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>
<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<div class="page-header">
			<h1>
				Formulir Login
				<small>
					<i class="ace-icon fa fa-angle-double-right"></i>
					Masukkan nama-pengguna dan kata sandi
				</small>
			</h1>
		</div><!-- /.page-header -->
		<div class="row">
				<?php echo form_open($this->uri->uri_string(), ' class="panel-body wrapper-lg form-horizontal" id="form" role="form"'); ?>
					<div class="form-group <?php echo (form_error('login') OR isset($errors['login'])) ? 'has-error' :''; ?>">
						<!--<label class="col-xs-12 col-sm-2 col-md-2 control-label no-padding-right"><span class="accesskey">N</span>ama Pengguna (Username):</label>-->
						<div class="col-sm-3">
							<span class="block input-icon input-icon-right">
								<input placeholder="Username atau email"  data-original-title="Nama pengguna." data-rel="tooltip" title="" data-placement="bottom" autofocus="autofocus" accesskey="n" name="login" id="form-field-1-1 inputWarning" class="form-control" type="text" value="<?php echo set_value('login');?>" autocomplete="off">
								<?php echo (form_error('login') OR isset($errors['login'])) ? '<i class="ace-icon fa fa-times-circle"></i>' :''; ?>
							</span>
						</div>
						<?php echo form_error('login'); ?>
						<?php echo isset($errors['login'])? '<div class="help-block col-xs-12 col-sm-reset inline">' . $errors['login'] . '</div>':''; ?>
					</div>
					
					<div class="form-group <?php echo (form_error('password') OR isset($errors['password'])) ? 'has-error' :''; ?>">
						<!--<label class="col-xs-12 col-sm-2 col-md-2 control-label no-padding-right"><span class="accesskey">K</span>ata Sandi:</label> -->
						<div class="col-sm-3">
							<span class="block input-icon input-icon-right">
								<input placeholder="Kata Sandi"  data-original-title="Kata Sandi." data-rel="tooltip" title="" data-placement="bottom" autofocus="autofocus" accesskey="k" name="password" id="form-field-1-1 inputWarning" class="form-control" type="password" value="" autocomplete="off">
								<?php echo (form_error('password') OR isset($errors['password'])) ? '<i class="ace-icon fa fa-times-circle"></i>' :''; ?>
							</span>
						</div>
						<?php echo form_error('password'); ?>
						<?php echo isset($errors['password'])? '<div class="help-block col-xs-12 col-sm-reset inline">' . $errors['password'] . '</div>':''; ?>
					</div>
					
					<?php 
					if ($show_captcha) {
							if ($use_recaptcha) {
					?>
						<div id="recaptcha_image"></div>
						<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
						<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
						<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
						<div class="recaptcha_only_if_image">Enter the words above</div>
						<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
						<div class="space-6"></div>
						<div class="form-group <?php echo (form_error('recaptcha_response_field')) ? 'has-error' :''; ?>">
							<div class="col-sm-3">
								<span class="block input-icon input-icon-right">
								<input type="text" id="recaptcha_response_field" name="recaptcha_response_field" class="form-control" placeholder="Kode Keamanan"/>
								</span>
							</div>
							<?php echo $recaptcha_html; ?>
							<?php echo form_error('recaptcha_response_field'); ?>
						</div>
					<?php 
							} else { 
					?>
						<p>Silahkan masukkan kode keamanan yang terlihat pada gambar.</p>
						<?php echo $captcha_html; ?>
						<div class="space-6"></div>
						<div class="form-group <?php echo (form_error('captcha')) ? 'has-error' :''; ?>">
							<!--<label class="col-xs-12 col-sm-2 col-md-2 control-label no-padding-right"><span class="accesskey">K</span>ata Sandi:</label> -->
							<div class="col-sm-3">
								<span class="block input-icon input-icon-right">
									<input placeholder="Kode keamanan"  data-original-title="Silahkan masukkan kode keamanan yang terlihat pada gambar." data-rel="tooltip" title="" data-placement="bottom" autofocus="autofocus" accesskey="c" name="captcha" id="form-field-1-1 inputWarning" class="form-control" type="text" value="" autocomplete="off">
									<?php echo (form_error('captcha')) ? '<i class="ace-icon fa fa-times-circle"></i>' :''; ?>
								</span>
							</div>
							<?php echo form_error('captcha'); ?>
						</div>
					<?php 
							}
						}
					?>
					
					<div class="checkbox"> 
						<label for="remember">
						<input class="ace" id="remember" name="remember" tabindex="3" type="checkbox" value="1">
						<span class="lbl accesskey">I</span>ngatkan Saya !</label>
					</div>
					<div class="space"></div>
					<?php 
						if ($this->config->item('auth.allow_forgot_password')){
					?>
							<a href="<?php echo site_url('auth/forgot_password/');?>" class="pull-right m-t-xs"><small>Lupa Kata Sandi?</small></a> 
					<?php
						} 
					?>
					<input class="btn btn-primary" name="submit" accesskey="l" value="Login" tabindex="4" type="submit">
					<input class="btn btn-warning" name="reset" accesskey="c" value="Reset" tabindex="5" type="reset">
					<div class="line line-dashed"></div>
				</form>							
			</div>
		</div>
		<!-- PAGE CONTENT ENDS -->
</div><!-- /.row -->

