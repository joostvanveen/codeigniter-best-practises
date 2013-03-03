<?php
class Users extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->ion_auth->login('admin@admin.com', 'password');
        
        if ($this->ion_auth->logged_in() == false) {
            redirect('user/login');
        }
    }

    /**
     * Login a user and redirect him to questions
	*/
    public function login ()
    {
        // TODO redirect if already logged in
        //TODO Set up form
        //TODO Process the form
            //TODO Try to log in
                //TODO  Redirect
                //TODO Error message 
        //TODO  Set subview & Load layout
    }
    public function register ()
    {
    }
}