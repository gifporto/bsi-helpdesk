<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class App_hooks
{


	/**
	 * Stores the CodeIgniter core object.
	 *
	 * @access private
	 *
	 * @var object
	 */
	private $ci;

	/**
	 * List of pages where the hooks are not run.
	 *
	 * @access private
	 *
	 * @var array
	 */
	private $ignore_pages = array();

	//--------------------------------------------------------------------


	/**
	 * Costructor
	 */
	public function __construct()
	{
		$this->ci =& get_instance();
		$this->ignore_pages = array('login', 'logout');
	}//end __construct()

	//--------------------------------------------------------------------
	
	public function debugging_app()
	{
		$ajax_request = ( !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') ? TRUE : FALSE;
		if (!$ajax_request) {
			if ( $this->ci->config->item('app_debug') ) {
				$this->ci->output->enable_profiler(TRUE);
			}
		}
	}

	/**
	 * Stores the name of the current uri in the session as 'previous_page'.
	 * This allows redirects to take us back to the previous page without
	 * relying on inconsistent browser support or spoofing.
	 *
	 * Called by the "post_controller" hook.
	 *
	 * @access public
	 *
	 * @return void
	 */
	/* 
	public function prep_redirect()
	{
		if (!class_exists('CI_Session'))
		{
			$this->ci->load->library('session');
		}

		if (!in_array($this->ci->uri->uri_string(), $this->ignore_pages))
		{
			$this->ci->session->set_userdata('previous_page', current_url());
		}
	} 
	*/
	//end prep_redirect()

	//--------------------------------------------------------------------

	/**
	 * Store the requested page in the session data so we can use it
	 * after the user logs in.
	 *
	 * Called by the "pre_controller" hook.
	 *
	 * @access public
	 *
	 * @return void
	 */
	/* 
	public function save_requested()
	{
		if (!class_exists('CI_Session'))
		{
			$this->ci->load->library('session');
		}

		if (!in_array($this->ci->uri->uri_string(), $this->ignore_pages))
		{
			$this->ci->session->set_userdata('requested_page', current_url());
		}
	}
	*/
	//end save_requested()

	//--------------------------------------------------------------------

	/**
	 * Check the online/offline status of the site.
	 *
	 * Called by the "post_controller_constructor" hook.
	 *
	 * @access public
	 *
	 * @return void
	 *
	 */
	public function check_site_status()
	{
		if ($this->ci->config->item('app_status') == FALSE)
		{
			$this->ci->load->library(array('session'));
			#include (APPPATH .'errors/offline'. EXT);
			if($this->ci->session->userdata('is_logged_in') != TRUE AND $this->ci->session->userdata('user_group') != '0')
			{
				show_error('Website under maintenance.' , '404' );
				die();
			}
		}		
	}
	//end check_site_status()
}//end class
