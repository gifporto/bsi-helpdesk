    <?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
    
    if ( ! function_exists('get_user_id'))
    {
        function get_user_id()
        {
            $ci=& get_instance();
            return $ci->authentication->get_user_id();
        } 
    }
    
    if ( ! function_exists('get_user_name'))
    {
        function get_user_name()
        {
            $ci=& get_instance();
            if(!is_null( $ci->authentication->get_username() )){
                return $ci->authentication->get_username();
            } else {
                return NULL;
            }
        } 
    }
    
    if ( ! function_exists('get_user_real_name'))
    {
        function get_user_real_name()
        {
            $ci=& get_instance();
            if(!is_null( $ci->authentication->get_user_real_name() )){
                return $ci->authentication->get_user_real_name();
            } else {
                return NULL;
            }
        } 
    }
    
    if ( ! function_exists('get_user_email'))
    {
        function get_user_email()
        {
            $ci=& get_instance();
            if(!is_null( $ci->authentication->get_user_email() )){
                return $ci->authentication->get_user_email();
            } else {
                return NULL;
            }
        } 
    }
    
    if ( ! function_exists('get_user_group'))
    {
        function get_user_group()
        {
            $ci=& get_instance();
            if(!is_null( $ci->authentication->get_user_group() )){
                return $ci->authentication->get_user_group();
            } else {
                return NULL;
            }
        } 
    }
    
    if ( ! function_exists('get_user_role_id'))
    {
        function get_user_role_id()
        {
            $ci=& get_instance();
            if(!is_null( $ci->authentication->get_user_role_id() )){
                return $ci->authentication->get_user_role_id();
            } else {
                return NULL;
            }
        } 
    }
    
    if ( ! function_exists('get_user_unit_kode'))
    {
        function get_user_unit_kode()
        {
            $ci=& get_instance();
            if(!is_null( $ci->authentication->get_user_unit_kode() )){
                return $ci->authentication->get_user_unit_kode();
            } else {
                return NULL;
            }
        } 
    }
    
    if ( ! function_exists('get_user_unit_id'))
    {
        function get_user_unit_id()
        {
            $ci=& get_instance();
            if(!is_null( $ci->authentication->get_user_unit_id() )){
                return $ci->authentication->get_user_unit_id();
            } else {
                return NULL;
            }
        } 
    }

    if ( ! function_exists('get_user_org_id'))
    {
        function get_user_org_id()
        {
            $ci=& get_instance();
            if(!is_null( $ci->authentication->get_user_org_id() )){
                return $ci->authentication->get_user_org_id();
            } else {
                return NULL;
            }
        } 
    }

   if ( ! function_exists('get_user_org'))
   {
      function get_user_org()
      {
         $ci=& get_instance();
         if(!is_null( $ci->authentication->get_user_org() )){
            return $ci->authentication->get_user_org();
         } else {
            return NULL;
         }
      } 
   }

   if ( ! function_exists('get_periode_org'))
   {
      function get_periode_org()
      {
         $ci=& get_instance();
         if(!is_null( $ci->authentication->get_periode_org() )){
            return $ci->authentication->get_periode_org();
         } else {
            return NULL;
         }
      } 
   }

   if ( ! function_exists('get_periode_org_status'))
   {
      function get_periode_org_status()
      {
         $ci=& get_instance();
         if(!is_null( $ci->authentication->get_periode_org_status() )){
            return $ci->authentication->get_periode_org_status();
         } else {
            return NULL;
         }
      } 
   }

    if ( ! function_exists('get_backend_user'))
    {
        function get_backend_user()
        {
            $ci=& get_instance();
            if(!is_null( $ci->authentication->get_backend_user() )){
                return $ci->authentication->get_backend_user();
            } else {
                return NULL;
            }
        } 
    }
    
    if ( ! function_exists('restrict'))
    {
        function restrict($module_link = NULL, $return = FALSE)
        {
            $ci=& get_instance();
            
            if($ci->authentication->restrict($module_link) == FALSE){
                if($ci->input->is_ajax_request()){
                    if($return == TRUE){
                        return FALSE;
                    } else {
                        exit('No script allowed.');
                    }
                } else {
                    if($return == TRUE){
                        return FALSE;
                    } else {
                        show_error("Error! Don't have permission to access on this uri.");
                    }
                }
            } else {
                if($return == TRUE){
                    return TRUE;
                }
            }
        } 
    }
    
    if ( ! function_exists('protect_acct'))
    {
        function protect_acct()
        {
            $ci=& get_instance();
            return $ci->authentication->protect_acct();
        } 
    }
    
    if ( ! function_exists('localized_lang'))
    {
        function localized_lang( $uri )
        {
            $ci=& get_instance();
            return $ci->lang->localized($uri);
        } 
    }

// ------- AUTH -------
    if (!function_exists('hashSSHA')) {
       /**
         * Encrypting password
         * @param password
         * returns salt and encrypted password
         */
        function hashSSHA($password) {

            $salt = sha1(rand());
            $salt = substr($salt, 0, 10);
            $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
            $hash = array("salt" => $salt, "encrypted" => $encrypted);
            return $hash;
        }
    }

    if (!function_exists('checkhashSSHA')) {
        /**
         * Decrypting password
         * @param salt, password
         * returns hash string
         */
        function checkhashSSHA($salt, $password) {

            $hash = base64_encode(sha1($password . $salt, true) . $salt);

            return $hash;
        }
    }
    
    if (!function_exists('generateKey')) {
        /**
         * API key
         * @param salt, password
         * returns hash string
         */
        function generateKey($salt, $password) {
            do
            {
                // Generate a random salt
                $salt = base_convert(bin2hex($this->security->get_random_bytes(64)), 16, 36);

                // If an error occurred, then fall back to the previous method
                if ($salt === FALSE)
                {
                    $salt = hash('sha256', time() . mt_rand());
                }

                $new_key = substr($salt, 0, config_item('rest_key_length'));
            }
            while ($this->_key_exists($new_key));

            return $new_key;
        }
    }
   