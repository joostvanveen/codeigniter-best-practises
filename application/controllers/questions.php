<?php
class Questions extends MY_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('question_model');
        $this->load->model('answer_model');
    }
    public function add ()
    {

    }
    
    /**
     * Display a single question
     */
    public function detail ($id)
    {
        // Fetch a single question with its user and answers
        $this->data['question'] = $this->question_model->with('user')->get($id);
        $this->db->where('questions_id', $id);
        $this->data['answers'] = $this->answer_model->with('user')->get_all();

        // Load view
        $this->load_view('questions/detail');
    }
    
    /**
     * Display a list of all questions
     */
    public function listing ()
    {
        // Fetch all questions
        $this->data['questions'] = $this->question_model->get_with_users();
        
        // Load view
        $this->load_view('questions/listing');
    }
}