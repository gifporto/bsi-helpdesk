<?php
if ($use_username) {
	$username = array(
		'name'	=> 'username',
		'id'	=> 'username inputWarning',
		'value' => set_value('username'),
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
		'size'	=> 30,
		'class'	=> 'width-100',
	);
}
$email = array(
	'name'	=> 'email',
	'id'	=> 'email inputWarning',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class'	=> 'width-100',
);
$password = array(
	'name'	=> 'password',
	'id'	=> 'password inputWarning',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
	'class'	=> 'width-100',
);
$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password inputWarning',
	'value' => set_value('confirm_password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
	'class'	=> 'width-100',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha inputWarning',
	'maxlength'	=> 8,
	'class'	=> 'width-100',
);
?>
<div class="page-header">
	<h1>
		<i class="ace-icon fa fa-file-o"></i> <span class="hidden-sm hidden-xs">Pendaftaran menjadi Member</span>
		<span class="hidden-md hidden-lg">Daftar</span>
	</h1>
</div><!-- /.page-header -->
<div class="row">
	<div class="col-xs-12 col-sm-9 widget-container-col">
		<div class="widget-box transparent">
			<div class="widget-header">
				<h5 class="widget-title"><i class="ace-icon fa fa-users green"></i> Form Registerasi</h5>

				<div class="widget-toolbar">
					<a href="#" data-action="fullscreen" class="orange2">
						<i class="ace-icon fa fa-expand"></i>
					</a>
				</div>
			</div>

			<div class="widget-body">
				<div class="widget-main">
					<?php echo form_open($this->uri->uri_string(),  array('class' => 'form-horizontal')); ?>
						<fieldset>
							<?php if ($use_username) { ?>
							<div class="form-group <?php echo isset($errors[$username['name']]) ? 'has-error' :''; ?> <?php echo (form_error($username['name'])) ? 'has-error' :''; ?>">
								<label for="<?php echo $username['name'];?>" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">Username</label>
								<div class="col-xs-12 col-sm-5">
									<span class="block input-icon input-icon-right">
										<?php echo form_input($username); ?>
										<?php echo isset($errors[$username['name']]) ? '<i class="ace-icon fa fa-times-circle"></i>' :''; ?> <?php echo (form_error($username['name'])) ? '<i class="ace-icon fa fa-times-circle"></i>' :''; ?>
									</span>
								</div>
								<?php echo form_error($username['name']); ?><?php echo isset($errors[$username['name']]) ? $errors[$username['name']] :''; ?>
							</div>
							<?php } ?>
							<div class="form-group <?php echo isset($errors[$email['name']]) ? 'has-error' :''; ?> <?php echo (form_error($email['name'])) ? 'has-error' :''; ?>">
								<label for="<?php echo $username['name'];?>" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">Email Address</label>
								<div class="col-xs-12 col-sm-5">
									<span class="block input-icon input-icon-right">
										<?php echo form_input($email); ?>
										<?php echo isset($errors[$email['name']]) ? '<i class="ace-icon fa fa-times-circle"></i>' :''; ?> <?php echo (form_error($email['name'])) ? '<i class="ace-icon fa fa-times-circle"></i>' :''; ?>
									</span>
								</div>
								<?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']]) ? $errors[$email['name']] :''; ?>
							</div>
							<div class="form-group <?php echo (form_error($password['name'])) ? 'has-error' :''; ?>">
								<label for="<?php echo $password['name'];?>" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">Password</label>
								<div class="col-xs-12 col-sm-5">
									<span class="block input-icon input-icon-right">
										<?php echo form_password($password); ?>
										<?php echo (form_error($password['name'])) ? '<i class="ace-icon fa fa-times-circle"></i>' :''; ?>
									</span>
								</div>
								<?php echo form_error($password['name']); ?>
							</div>
							<div class="form-group <?php echo (form_error($confirm_password['name'])) ? 'has-error' :''; ?>">
								<label for="<?php echo $confirm_password['name'];?>" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">Confirm Password</label>
								<div class="col-xs-12 col-sm-5">
									<span class="block input-icon input-icon-right">
										<?php echo form_password($confirm_password); ?>
										<?php echo (form_error($confirm_password['name'])) ? '<i class="ace-icon fa fa-times-circle"></i>' :''; ?>
									</span>
								</div>
								<?php echo form_error($confirm_password['name']); ?>
							</div>

	<?php if ($captcha_registration) {
		if ($use_recaptcha) { ?>
	<tr>
		<td colspan="2">
			<div id="recaptcha_image"></div>
		</td>
		<td>
			<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
			<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
			<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
		</td>
	</tr>
	<tr>
		<td>
			<div class="recaptcha_only_if_image">Enter the words above</div>
			<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
		</td>
		<td><input type="text" id="recaptcha_response_field" name="recaptcha_response_field" /></td>
		<td style="color: red;"><?php echo form_error('recaptcha_response_field'); ?></td>
		<?php echo $recaptcha_html; ?>
	</tr>
							
	<?php } else { ?>
							
							
							<div class="form-group <?php echo (form_error($captcha['name'])) ? 'has-error' :''; ?>">
								
								<label for="<?php echo $captcha['name'];?>" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">Kode Keamanan</label>
								<div class="col-xs-12 col-sm-5">
									<p>Silahkan masukkan kode keamanan yang terlihat pada gambar.</p>
									<?php echo $captcha_html; ?>
									<div class="space-6"></div>
									<span class="block input-icon input-icon-right">
										<?php echo form_input($captcha); ?>
										<?php echo (form_error($captcha['name'])) ? '<i class="ace-icon fa fa-times-circle"></i>' :''; ?>
									</span>
								</div>
								<?php echo form_error($captcha['name']); ?>
							</div>
	<?php }
	} ?>
							<div class="">
								<input name="register" value="Register" type="submit" class="width-10 pull-left btn btn-sm btn-primary">
							</div>
						</fieldset>
					<?php echo form_close();?>
					<br><br>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-3 widget-container-col hidden-sm hidden-xs">
		<p>Silahkan melakukan pendaftaran pada form registerasi. Untuk setiap inputan mohon diisi dengan data yang benar.</p>
	</div>
</div>
