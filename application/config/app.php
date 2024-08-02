<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------
| !SITE
|--------------------------------------------------------------------
*/
$config['app_name']     = 'Sistem Informasi Pelaporan Aisyiyah';
$config['app_title']    = 'Sistem Informasi Pelaporan Aisyiyah';
$config['app_status']   = TRUE;
$config['app_set_cipher']   = 'blowfish-compat';
$config['app_encrypt_mode'] = TRUE; 

/* debug query db */
$config['app_debug']    = 0;  // 0 = false, 1 = true
$config['app_default_controller']   = 'auth/login';//'welcome';
$config['app_auth_controller']      = 'auth/login';
$config['app_admin_controller']     = 'dashboard';


$config['use_captcha']  = FALSE;

/*
|--------------------------------------------------------------------
| Captcha
|--------------------------------------------------------------------
*/
$config['captcha_path'] = 'assets/captcha/';
$config['captcha_fonts_path'] = 'assets/captcha/fonts/3.ttf';
$config['captcha_width'] = 200;
$config['captcha_height'] = 50;
$config['captcha_font_size'] = 24;
$config['captcha_grid'] = TRUE;
$config['captcha_expire'] = 180;
$config['captcha_case_sensitive'] = FALSE;


/*
|--------------------------------------------------------------------
| Upload Foto & file
|--------------------------------------------------------------------
*/
$config['foto_upload_path']      = './uploads/foto/';
$config['dokumen_upload_path']   = './uploads/dokumen/';
$config['file_allowed_types']    = 'jpg|png|jpeg|pdf';
