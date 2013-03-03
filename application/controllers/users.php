<?php
class Users extends MY_Controller
{

    public function __construct ()
    {
        parent::__construct();
        $this->load->model('user_model');
    }
    
    public function logout ()
    {
        $this->ion_auth->logout();
        redirect('users/login');
    }

    /**
     * Login a user and redirect him to questions
     */
    public function login ()
    {
        // redirect if already logged in
        if ($this->ion_auth->logged_in() == TRUE) {
            redirect('questions/listing');
        }
        
        // Validate the form
        $this->form_validation->set_rules($this->user_model->validation);
        if ($this->form_validation->run() == true) {
            
            // Try to log in
            if ($this->ion_auth->login($this->input->post('email'), $this->input->post('password')) == TRUE) {
                redirect('questions/listing');
            }
            else {
                $this->data['error'] = 'We could not log you in';
            }
        }
        
        // Set subview & Load layout
        $this->load_view('users/login');
    }

    public function register ()
    {}
}