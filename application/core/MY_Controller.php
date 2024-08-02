<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_Controller extends CI_Controller {

   public function __construct()
   {
        parent::__construct();
      //Do your magic here

        /*$this->template->set_layout('layout_default')
                     ->set_partial('modules_js','modules_js')
                     ->set_partial('modules_css','modules_css');
        $this->asset->set_theme($this->config->item('theme'));
        */
        $this->load->library(array('form_validation','authentication'));
        
        
        $this->lang->load('auth/auth');
        $this->template->title($this->config->item('site.title'));
        $this->form_validation->CI =& $this;    
   }

   /**
     * Create CAPTCHA image to verify user as a human
     *
     * @return  string
     */
    public function _create_captcha()
    {
        $this->load->helper('captcha');
        #$this->load->model('registrasi/M_registrasi');
        $cap = create_captcha(array(
            //'word'          => randomString(6),
            'img_path'      => './'.config_item('captcha_path'),
            'img_url'       => base_url().config_item('captcha_path'),
            'font_path'     => './'.config_item('captcha_fonts_path'),
            'img_width'     => config_item('captcha_width'),
            'img_height'    => config_item('captcha_height'),
            'show_grid'     => config_item('captcha_grid'),
            'expiration'    => config_item('captcha_expire'),
            'word_length'   => 5,
            'font_size'     => config_item('captcha_font_size'),
            'img_id'        => 'captchaId',
            'pool'          => '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ',
            'colors'        => array(
                    'background' => array(255, 255, 255),
                    'border' => array(255, 255, 255),
                    //'text' => array(229, 5, 5),
                    'text' => array(0, 0, 0),
                    'grid' => array(255, 40, 40),
            ),
        ));

        $data = array(
                    'captcha_time'  => $cap['time'],
                    'ip_address'    => $this->input->ip_address(),
                    'word'          => $cap['word']
                );
                
        #$this->M_registrasi->insert_captcha($data);
        
        return $cap['image'];
    }

    /**
     * Callback function. Check if CAPTCHA test is passed.
     *
     * @param   string
     * @return  bool
     */
    public function _check_captcha($code)
    {
        $this->load->model('registrasi/M_registrasi');
        
        list($usec, $sec) = explode(" ", microtime());
        $now = ((float)$usec + (float)$sec);
        $expiration = time() - 7200;
        $rest = $this->M_registrasi->count_available_captcha(array($code, $this->input->ip_address(), $expiration));
        
        if( $rest->count == 0 ){
            $this->form_validation->set_message('_check_captcha', 'Kode Keamanan salah, Silahkan masukan kode dengan benar');
            return FALSE;
        } else {
            $this->M_registrasi->delete_captcha(array('ip_address' => $this->input->ip_address()));
        }
        
        return TRUE;
    }
}

class Auth_Controller extends Base_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->template->set_layout('layout_admin')
                            ->set_partial('modules_js','modules_js')
                            ->set_partial('modules_css','modules_css');
        $this->asset->set_theme($this->config->item('theme'));
    }
    
}


class APP_Controller extends Base_Controller
{
    public function __construct()
    {
        parent::__construct();
        
        $this->template->set_layout('layout_default')
                            ->set_partial('modules_js','modules_js')
                            ->set_partial('modules_css','modules_css');
        $this->asset->set_theme($this->config->item('theme'));
    }
    
}

class AJAX_Controller extends Base_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
}


/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
