<?php
class User_model extends MY_Model
{
    
    protected $has_many = array(
        'questions', 
        'answers');
    public $validation = array(
        array(
            'field' => 'email', 
            'label' => 'Email', 
            'rules' => 'required|valid_email|trim'), 
        array(
            'field' => 'password', 
            'label' => 'Password', 
            'rules' => 'required|trim'));

    public function __construct ()
    {
        parent::__construct();
        $this->_database = $this->db;
    }
}