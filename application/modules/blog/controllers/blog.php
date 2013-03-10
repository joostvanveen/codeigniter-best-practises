<?php
class Blog extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('blog_m');
    }

    public function listing ()
    {
        $posts = $this->blog_m->get_posts();
        $this->load->view('listing', array('posts' => $posts));
    }
}