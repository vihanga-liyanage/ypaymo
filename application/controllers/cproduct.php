<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CProduct extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->data['img_path'] = base_url("assets/images/");
		$this->load->model('mproduct');
        $this->load->library('cart');
	}
	
	public function index($index = 0){
		$this->load->view('templates/header');
        $this->load->view('templates/nav');
		$data['listproduct'] = $this->mproduct->findAll();
		$this->load->view('index',$data);
		$this->load->view('templates/footer');
	}
}