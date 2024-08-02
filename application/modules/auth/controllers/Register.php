<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends Auth_Controller {

	private $module = 'auth';

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model($this->module.'/Users');
	}

	public function index()
	{

		$this->form_validation->set_rules('fullname', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'Tempat  Lahir', 'required');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('jns_kelamin', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('telp', 'Telepon', 'required');
		$this->form_validation->set_rules('hp', 'HP', 'required');
		$this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
		$this->form_validation->set_rules('jenjang', 'Jenjang', 'required');
		$this->form_validation->set_rules('tahun_lulus', 'Tahun Lulus', 'required');
		if ($this->form_validation->run()) {
			$email 		= $this->input->post('email');
			$password 	= $this->input->post('password');

			//$check_email = $this->Users->is_email_available($username);
			$password_hash = $this->authentication->password_hasher($password);
			
			if ($this->Users->is_email_available($email)) {
				$data  = array(	
						'UserName'	=> $this->input->post('username'),
						'UserEmail'	=> $email,
						'UserPrimaryPhone'	=> $this->input->post('hp'),
						'UserRealName'	=> ($this->input->post('fullname') != '') ? $this->input->post('fullname') : NULL,
						'UserUnitId'	=> NULL,
						'UserRoleId'	=> NULL,
						'UserProdiKode'	=> NULL,
						'UserSalt'	=> $password_hash['salt'],
						'UserPassword'	=> $password_hash['encrypted'],
						'UserGroup'	=> array(3),
						'UserGroupDefault'	=> 3,
						'UserFoto' => NULL,
						'UserIsActive' => '1',
						'userAdd' =>  'system',
						'datetime' => date('Y-m-d H:i:s'),
						'ip_address' => $this->input->ip_address(),
				);

				if( $this->Users->input_data_user($data) ) {
					$tanggal = str_replace('/','-',$this->input->post('tgl_lahir'));
						$params = array(
							'nama' 	=> $this->input->post('fullname'),
							'nik'		=> $this->input->post('nik'),
							'tmp_lahir'	=> $this->input->post('tempat_lahir'),
							'tgl_lahir' => date("Y-m-d", strtotime($tanggal)), 
							'jns_kelamin'	=> $this->input->post('jns_kelamin'),
							'alamat'	=> $this->input->post('alamat'),
							'email' 	=> $email,
							'telp'	=> $this->input->post('telp'),
							'hp'		=> $this->input->post('hp'),
							'pendidikan'	=> $this->input->post('pendidikan'),
							'jurusan'	=> $this->input->post('jurusan'),
							'jenjang'	=> $this->input->post('jenjang'),
							'tahun_lulus'	=> $this->input->post('tahun_lulus'),
							'instansi'	=> $this->input->post('instansi'),
							'jabatan'	=> $this->input->post('jabatan'),
							'alamat_instansi'	=> $this->input->post('alamat_instansi'),
							'telp_instansi'	=> $this->input->post('telp_instansi'),
							'datetime'	=> date('Y-m-d H:i:s')
					);

					if ($this->Users->input_data_asesi($params)) {
						$this->session->set_flashdata('msg_register', array('status' => TRUE, 'type' => 'success', 'text' => 'Registrasi akun Anda telah berhasil.'));		
					} else {
						$this->session->set_flashdata('msg_register', array('status' => FALSE, 'type' => 'warning', 'text' => 'Maaf, Registrasi akun gagal.'));
					}
			} else {
					$this->session->set_flashdata('msg_register', array('status' => FALSE, 'type' => 'warning', 'text' => 'Maaf, Registrasi akun gagal.'));
			}
		} else {
			$this->session->set_flashdata('msg_register', array('status' => FALSE, 'type' => 'warning', 'text' => 'Maaf, Email sudah terdaftar.'));
		}


	} 

		$data['title'] = 'Register';
		$data['jenjang'] = $this->Users->get_jenjang_pendidikan();
		$this->template->set_layout('layout_auth')
							->set_partial('modules_js','modules_js')
							->set_partial('modules_css','modules_css');
		$this->template->set_breadcrumb( 'Register Form' , site_url('login'), 'ace-icon fa fa-lock home-icon blue' );
		$this->template->build( 'auth/register_form', $data);
	}

}

/* End of file Register.php */
/* Location: ./application/modules/auth/controllers/Register.php */