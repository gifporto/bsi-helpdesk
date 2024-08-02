<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Users
 *
 * This model represents user authentication data. It operates the following tables:
 * - user account data,
 *
 * @package	Tank_auth
 * @author	Ilya Konyukhov (http://konyukhov.com/soft/)
 */
class Users extends CI_Model
{
    private $user_table            = 'user';            // user accounts
    private $group_table           = 'group';            // group
    private $group_user_table    = 'user_group';        // user_group
    private $unit_table        = 'unit';
    private $org_user_table        = 'user_organisasi';
    private $periode_org       = 'periode_organisasi';
    private $periode           = 'periode';

    function __construct()
    {
        parent::__construct();

        $ci = &get_instance();
        $this->user_table               = $ci->config->item('app_db_table_prefix') . $this->user_table;
        $this->group_table            = $ci->config->item('app_db_table_prefix') . $this->group_table;
        $this->group_user_table        = $ci->config->item('app_db_table_prefix') . $this->group_user_table;
        $this->unit_table              = $ci->config->item('app_db_table_prefix') . $this->unit_table;
        $this->org_user_table        = $ci->config->item('app_db_table_prefix') . $this->org_user_table;
    }

    function edit_password($params)
    {
    }
}
