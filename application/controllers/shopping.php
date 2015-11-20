<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Shopping extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		$this->load->helper('url');
		$this->load->view('home');
	}
	public function test(){
		echo "test1";
	}
}
?>
	