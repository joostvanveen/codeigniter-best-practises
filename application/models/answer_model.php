<?php
class Answer_model extends MY_Model
{
    
    protected $belongs_to = array(
        'user', 
        'question' => array(
            'primary_key' => 'questions_id'));
    
    public $validation = array(
        array('field' => 'user_id', 'label' => '', 'rules' => 'intval'),
        array('field' => 'questions_id', 'label' => '', 'rules' => 'intval'),
        array('field' => 'text', 'label' => 'Answer', 'rules' => 'trim|sanitize'),
         );

    public function __construct ()
    {
        parent::__construct();
        $this->_database = $this->db;
    }
    
    /**
     * Insert an answer from POST values
     * @see MY_Model::insert()
     */
    public function insert ()
    {
        $data = array(
            'user_id' => $this->input->post('user_id'),
            'questions_id' => $this->input->post('questions_id'),
            'text' => $this->input->post('text'),
        );
        
        parent::insert($data);
    }
}