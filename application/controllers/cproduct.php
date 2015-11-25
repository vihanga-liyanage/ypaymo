<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CProduct extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('mproduct');
                $this->load->library('cart');
	}
	
	public function index($index = 0){
		
		$data['listproduct'] = $this->mproduct->findAll();
		$this->load->view('index',$data);
	}
}