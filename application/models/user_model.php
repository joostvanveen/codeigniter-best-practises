<?php
class User_model extends MY_Model
{

    protected $has_many = array('questions', 'answers');
    
    public function __construct ()
    {
        parent::__construct();
        $this->_database = $this->db;
    }
}