<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Public_Restricted_Controller extends MY_Controller {

    function __construct() {
        parent::__construct();
        // logic for template
        if (!$this->ion_auth->logged_in())
        {
        	// redirect them to the login page
        	redirect('users/login', 'refresh');
        }
    }

}

/* End of file Public_Controller.php */
/* Location: ./application/core/Public_Controller.php */