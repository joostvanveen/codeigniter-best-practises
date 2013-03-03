<?php
class Users extends MY_Controller {

    public function __construct(){
        parent::__construct();
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
        
        $this->load->model('question_model');
        $questions = $this->question_model->with('answers')->get(1);
        dump($questions);
    }
    public function register ()
    {
    }
}