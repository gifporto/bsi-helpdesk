<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Database settings
| property prefix for system only on database table
|
|--------------------------------------------------------------------------
*/
$config['app_db_table_prefix'] = 'sys_';

/*
|--------------------------------------------------------------------------
| Security settings
|
| The library uses PasswordHash library for operating with hashed passwords.
| 'phpass_hash_portable' = Can passwords be dumped and exported to another server. If set to FALSE then you won't be able to use this database on another server.
| 'phpass_hash_strength' = Password hash strength.
|--------------------------------------------------------------------------
*/
$config['auth_phpass_hash_portable'] = FALSE;
$config['auth_phpass_hash_strength'] = 8;

/*
|--------------------------------------------------------------------------
| Login settings
| 'login_record_ip' = Save in database user IP address on user login.
| 'login_record_time' = Save in database current time on user login.
|
| 'login_count_attempts' = Count failed login attempts.
| 'login_max_attempts' = Number of failed login attempts before CAPTCHA will be shown.
| 'login_attempt_expire' = Time to live for every attempt to login. Default is 24 hours (60*60*24).
| 'username_min_length' = Min length of user's username.
| 'username_max_length' = Max length of user's username.
| 'password_min_length' = Min length of user's password.
| 'password_max_length' = Max length of user's password.
|--------------------------------------------------------------------------
*/
$config['auth_login_by_username'] = TRUE;
$config['auth_login_by_email'] = TRUE;
$config['auth_login_record_ip'] = TRUE;
$config['auth_login_record_time'] = TRUE;
$config['auth_login_count_attempts'] = FALSE;
$config['auth_login_max_attempts'] = 5;
$config['auth_login_attempt_expire'] = 60*60*24;

$config['auth_username_min_length'] = 6;
$config['auth_username_max_length'] = 20;
$config['auth_password_min_length'] = 6;
$config['auth_password_max_length'] = 20;

/*
|--------------------------------------------------------------------------
| Auto login settings
|
| 'autologin_cookie_name' = Auto login cookie name.
| 'autologin_cookie_life' = Auto login cookie life before expired. Default is 2 months (60*60*24*31*2).
|--------------------------------------------------------------------------
*/
$config['auth_autologin_cookie_name'] = 'autologin';
$config['auth_autologin_cookie_life'] = 60*60*24*31*2;

/*
|--------------------------------------------------------------------------
| Captcha
|
| You can set captcha that created by Auth library in here.
| 'captcha_path' = Directory where the catpcha will be created.
| 'captcha_fonts_path' = Font in this directory will be used when creating captcha.
| 'captcha_font_size' = Font size when writing text to captcha. Leave blank for random font size.
| 'captcha_grid' = Show grid in created captcha.
| 'captcha_expire' = Life time of created captcha before expired, default is 3 minutes (180 seconds).
| 'captcha_case_sensitive' = Captcha case sensitive or not.
|--------------------------------------------------------------------------
*/
$config['auth_captcha_path'] = 'assets/captcha/';
$config['auth_captcha_fonts_path'] = 'assets/captcha/fonts/5.ttf';
$config['auth_captcha_width'] = 200;
$config['auth_captcha_height'] = 50;
$config['auth_captcha_font_size'] = 24;
$config['auth_captcha_grid'] = TRUE;
$config['auth_captcha_expire'] = 180;
$config['auth_captcha_case_sensitive'] = FALSE;

/*
|--------------------------------------------------------------------------
| reCAPTCHA
|
| 'use_recaptcha' = Use reCAPTCHA instead of common captcha
| You can get reCAPTCHA keys by registering at http://recaptcha.net
|--------------------------------------------------------------------------
*/
$config['auth_use_recaptcha'] = FALSE;
$config['auth_recaptcha_public_key'] = '';
$config['auth_recaptcha_private_key'] = '';
