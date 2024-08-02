<?php
$old_password = array(
	'name'	=> 'old_password',
	'id'	=> 'inputWarning',
	'value' => '',
	'size' 	=> $this->config->item('auth.password_max_length'),
	'class'	=> 'width-100',
);
$new_password = array(
	'name'	=> 'new_password',
	'id'	=> 'inputWarning',
	'maxlength'	=> $this->config->item('auth.password_max_length'),
	'size'	=> $this->config->item('auth.password_max_length'),
	'class'	=> 'width-100',
);
$confirm_new_password = array(
	'name'	=> 'confirm_new_password',
	'id'	=> 'inputWarning',
	'maxlength'	=> $this->config->item('auth.password_max_length'),
	'size' 	=> $this->config->item('auth.password_max_length'),
	'class'	=> 'width-100',
);
?>
<h3 class="header smaller lighter blue">
	<span class="hidden-sm hidden-xs"> Ganti Kata Sandi</span>
</h3>
							<div class="row">
								<div class="col-xs-12">
								<div class="widget-box">
			<div class="widget-header">
				<h5 class="widget-title">Form Ganti Kata Sandi</h5>
			</div>

			<div class="widget-body">
				<div class="widget-main">	
									<?php echo form_open( $this->uri->uri_string(), array('class' => 'form-horizontal' )); ?>
										<?php
											if($this->session->flashdata('message_form')){
												$msg = $this->session->flashdata('message_form');
												
										?>
													<div class="alert alert-<?php echo $msg['status'];?>">
														<button type="button" class="close" data-dismiss="alert">
															<i class="ace-icon fa fa-times"></i>
														</button>
														<strong>
															<i class="ace-icon fa fa-warning"></i>
															<?php echo $msg['title'];?>!!
														</strong>
														<?php echo $msg['message'];?>
														<br />
													</div>
										<?php
											}
										?>
										<div class="form-group <?php echo isset($errors[$old_password['name']]) ? 'has-error' :''; ?> <?php echo (form_error($old_password['name'])) ? 'has-error' :''; ?>">
											<label for="<?php echo $old_password['name'];?>" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">Password lama</label>
											<div class="col-xs-12 col-sm-5">
												<span class="block input-icon input-icon-right">
													<?php echo form_password($old_password); ?>
													<?php echo isset($errors[$old_password['name']]) ? '<i class="ace-icon fa fa-times-circle"></i>' :''; ?> <?php echo (form_error($old_password['name'])) ? '<i class="ace-icon fa fa-times-circle"></i>' :''; ?>
												</span>
											</div>
											<?php echo form_error($old_password['name']); ?><?php echo isset($errors[$old_password['name']]) ? $errors[$old_password['name']] :''; ?>
										</div>
										<div class="form-group <?php echo isset($new_password[$new_password['name']]) ? 'has-error' :''; ?> <?php echo (form_error($new_password['name'])) ? 'has-error' :''; ?>">
											<label for="<?php echo $new_password['name'];?>" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">Password baru</label>
											<div class="col-xs-12 col-sm-5">
												<span class="block input-icon input-icon-right">
													<?php echo form_password($new_password); ?>
													<?php echo isset($errors[$new_password['name']]) ? '<i class="ace-icon fa fa-times-circle"></i>' :''; ?> <?php echo (form_error($new_password['name'])) ? '<i class="ace-icon fa fa-times-circle"></i>' :''; ?>
												</span>
											</div>
											<?php echo form_error($new_password['name']); ?><?php echo isset($errors[$new_password['name']]) ? $errors[$new_password['name']] :''; ?>
										</div>
										<div class="form-group <?php echo isset($confirm_new_password[$confirm_new_password['name']]) ? 'has-error' :''; ?> <?php echo (form_error($confirm_new_password['name'])) ? 'has-error' :''; ?>">
											<label for="<?php echo $confirm_new_password['name'];?>" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">Konfirmasi password baru</label>
											<div class="col-xs-12 col-sm-5">
												<span class="block input-icon input-icon-right">
													<?php echo form_password($confirm_new_password); ?>
													<?php echo isset($errors[$confirm_new_password['name']]) ? '<i class="ace-icon fa fa-times-circle"></i>' :''; ?> <?php echo (form_error($confirm_new_password['name'])) ? '<i class="ace-icon fa fa-times-circle"></i>' :''; ?>
												</span>
											</div>
											<?php echo form_error($confirm_new_password['name']); ?><?php echo isset($errors[$confirm_new_password['name']]) ? $errors[$confirm_new_password['name']] :''; ?>
										</div>
										<div class="clearfix form-actions">
											<div class="col-md-offset-3 col-md-9">
												
												<button type="submit" class="btn btn-info">
													<i class="ace-icon fa fa-check bigger-110"></i> Simpan
												</button>
												<!--
												<input type="submit" value="Simpan" class="btn btn-info">
												-->
											</div>
										</div>
									<?php echo form_close();?>
								</div>
							</div>
						</div>
					</div>
				</div>
