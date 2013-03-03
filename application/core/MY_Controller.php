<?php
class MY_Controller extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        
        // Check authentication
        $no_redirect = array('users/login');
        if ($this->ion_auth->logged_in() == false && !in_array(uri_string(), $no_redirect)) {
            redirect('users/login');
        }
        
        $this->output->enable_profiler(ENVIRONMENT == 'development');
    }
}