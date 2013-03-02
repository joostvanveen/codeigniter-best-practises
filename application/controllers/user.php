<?php
class User extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function login ()
    {
        echo 'Login form';
        var_dump($this->ion_auth->user()->row());
    }
}