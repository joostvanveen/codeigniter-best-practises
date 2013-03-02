<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use Netcarver\Textile;

class Welcome extends CI_Controller {

    public function __construct ()
    {
        parent::__construct();
        $this->ion_auth->login('admin@admin.com', 'password');
        
        if ($this->ion_auth->logged_in() == false) {
            redirect('user/login');
        }
    }
    
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
		$parser = new Textile\Parser();
		
		$string = 'h1. Welcome' . PHP_EOL . PHP_EOL;
		$string .= '* List item' . PHP_EOL;
		$string .= '* Another list item' . PHP_EOL;
		
		echo $parser->textileThis($string);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */