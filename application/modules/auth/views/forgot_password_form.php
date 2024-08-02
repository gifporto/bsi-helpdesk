<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class'	=> 'span5',
);
if ($this->config->item('use_username', 'tank_auth')) {
	$login_label = lang('application.auth_login_input_username');
} else {
	$login_label = 'Email';
}
?>
<div class="container-fluid">
	<div class="box">
		<div class="box-title">
			<h3><i class="icon-edit"></i> <?=lang('application.auth_forgot_password_header');?></h3>
		</div>
		<div class="box-content">
			<?=form_open($this->uri->uri_string() , array('class' => 'form-horizontal') ); ?>
				<div class="control-group">
					<?php echo form_label($login_label, $login['id'], array( "class" => "control-label")); ?>
					<div class="controls">
						<?php echo form_error($login['name']); ?>
						<?php echo isset($errors[$login['name']]) ? '<div class="alert alert-error"><button class="close" data-dismiss="alert">&times;</button>'. $errors[$login['name']] .'</div>' : ''; ?>
						<?php echo form_input($login); ?>
						<span class="help-block"><?=lang('auth_small_text_allow_forgot_pasword');?></span>
					</div>
				</div>
				<div class="form-actions">
					<?php echo form_button(array('name' => 'reset', 'type' => 'submit', 'content' => lang('application.auth_forgot_password_button') , 'class' => 'btn btn-primary' )); ?>
				</div>
			<?=form_close();?>
		</div>
	</div>
</div>