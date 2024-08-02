<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/


/* Debuging Mode */
$hook['post_controller'][] = array(
                                'class'     => 'App_hooks',
                                'function'  => 'debugging_app',
                                'filename'  => 'App_hooks.php',
                                'filepath'  => 'hooks',
                                'params'    => ''
                            ); 

/* Maintenance Mode */
$hook['post_controller_constructor'][] = array(
                                'class'     => 'App_hooks',
                                'function'  => 'check_site_status',
                                'filename'  => 'App_hooks.php',
                                'filepath'  => 'hooks',
                                'params'    => ''
                            );