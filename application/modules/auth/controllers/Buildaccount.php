<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buildaccount extends Auth_Controller
{
    private $module = 'auth';

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function index()
    {
        $password_hash = $this->authentication->password_hasher("admin123456");
        $data['title'] = 'Register';
        $data['hasil_salt'] = $password_hash["salt"];
        $data['hasil_hash'] = $password_hash["encrypted"];
        $this->template->set_layout('layout_auth')
            ->set_partial('modules_js', 'modules_js')
            ->set_partial('modules_css', 'modules_css');
        $this->template->set_breadcrumb('Register Form', site_url('login'), 'ace-icon fa fa-lock home-icon blue');
        $this->template->build('create_account_seeder', $data);
    }
}
