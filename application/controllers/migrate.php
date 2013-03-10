<?php
class Migrate extends CI_Controller
{

    public function __construct ()
    {
        parent::__construct();
        
        // Only run this through terminal
        if ($this->input->is_cli_request() == FALSE) {
            show_404();
        }
        
        $this->load->library('migration');
        $this->load->dbforge();
    }

    public function latest ()
    {
        $this->migration->latest();
        echo $this->migration->error_string() . PHP_EOL;
    }

    public function reset ()
    {
        $this->migration->version(0);
        echo $this->migration->error_string() . PHP_EOL;
    }

    public function version ($version = 0)
    {
        $version = (int) $version;
        if ($version == 0) {
            die('You need to paas a version greater than zero') . PHP_EOL;
        }
        
        $this->migration->version($version);
        echo $this->migration->error_string() . PHP_EOL;
    }

}