<?php
$email = array(
	'name'	=> 'email',
	'id'	=> 'email inputWarning',
	'value'	=> set_value('email'),
	'class'	=> 'width-100',
);
?>
<div class="page-header">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="<?php echo site_url();?>">Beranda</a>
		</li>
		<li class="active">Kirim aktifasi pengguna</li>
	</ul>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-9 widget-container-col">
		<div class="widget-main">
		<?=form_open($this->uri->uri_string() , array('class' => 'form-horizontal') ); ?>
			<div class="form-group <?php echo isset($errors[$email['name']]) ? 'has-error' :''; ?> <?php echo (form_error($email['name'])) ? 'has-error' :''; ?>">
				<label for="<?php echo $email['name'];?>" class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right">Alamat Email</label>
				<div class="col-xs-12 col-sm-5">
					<span class="block input-icon input-icon-right">
						<?php echo form_input($email); ?>
						<?php echo isset($errors[$email['name']]) ? '<i class="ace-icon fa fa-times-circle"></i>' :''; ?> <?php echo (form_error($email['name'])) ? '<i class="ace-icon fa fa-times-circle"></i>' :''; ?>
					</span>
				</div>
				<?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']]) ? $errors[$email['name']] :''; ?>
			</div>
			<div class="clearfix form-actions">
				<div class="col-md-offset-3 col-md-9">
					
					<button type="submit" class="btn btn-info btn-sm">
						<i class="ace-icon fa fa-check bigger-110"></i> Aktifasi Ulang
					</button>
					<!--
					<input type="submit" value="Simpan" class="btn btn-info">
					-->
				</div>
			</div>
		<?=form_close();?>
		</div>
	</div>
</div>
