<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_Controller extends MY_Controller {

    function __construct() {
        parent::__construct();
        // logic for template
        //check two things
        // 1. user is logged in
        // 2. user is admin
    if (!$this->ion_auth->logged_in() || (!$this->ion_auth->is_admin() && !($this->ion_auth->user()->row()->id == $id)))
		{
			redirect('users', 'refresh');
		}
    }

}

/* End of file Admin_Controller.php */
/* Location: ./application/core/Admin_Controller.php */