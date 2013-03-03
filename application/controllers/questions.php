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
        $cacheID = 'question_' . $id;
        if (!$this->data['question'] = $this->zf_cache->load($cacheID)) {
            $this->data['question'] = $this->question_model->with('user')->get($id);
            $this->zf_cache->save($this->data['question'], $cacheID, array('all_questions'));
        }
        
        $cacheID = 'answer_' . $id;
        if (!$this->data['answers'] = $this->zf_cache->load($cacheID)) {
            $this->db->where('questions_id', $id);
            $this->data['answers'] = $this->answer_model->with('user')->get_all();
            $this->zf_cache->save($this->data['answers'], $cacheID, array('all_answers', 'all_questions'));
        }
        
        // Save the answer
        if (count($_POST)) {
            $this->answer_model->insert();
            $this->zf_cache->remove('answer_' . $id);
            redirect(current_url());
        }
        
        // Load view
        $this->load_view('questions/detail');
    }
    
    /**
     * Display a list of all questions
     */
    public function listing ()
    {
        // Fetch all questions
        $cacheID = 'listing';
        if (!$this->data['questions'] = $this->zf_cache->load($cacheID)) {
            $this->data['questions'] = $this->question_model->get_with_users();
            $this->zf_cache->save($this->data['questions'], $cacheID, array('all_questions'));
        }
        
        // Load view
        $this->load_view('questions/listing');
    }
}