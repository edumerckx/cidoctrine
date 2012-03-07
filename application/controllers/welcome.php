<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		//$this->load->view('welcome_message');
		$this->smarty->assign('teste', 'testando smarty...');
		$this->smarty->view('test.tpl');
	}
	
	public function test(){
		
		$pessoa = new Pessoa();
		$pessoa->dt_nascimento = '2000-01-01';
		$pessoa->nome = 'batata';
		$pessoa->sexo = 'M';
		
		$pessoa->save();
		
		// teste smarty
		$this->smarty->assign('teste', 'testando smarty...');
		$this->smarty->view('test.tpl');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */