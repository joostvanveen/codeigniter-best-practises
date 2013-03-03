<?php
class Question_model extends MY_Model
{
    protected $belongs_to = array('user');
    protected $has_many = array('answers' => array('primary_key' => 'questions_id', 'model' => 'answer_model'));
    
    public function __construct ()
    {
        parent::__construct();
        $this->_database = $this->db;
    }
}