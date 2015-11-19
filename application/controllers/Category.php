<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model(array('category_model'));
	}

	public function index(){
		$this->load->view('category_view');
	}

	public function test(){
		echo "test";
	}

	public function insert()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('cat_name', 'Category Name', 'required');
		$this->form_validation->set_rules('cat_image', 'Category Image', 'required');
		
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('category_view');
		}
		else
		{
			$params['cat_name'] = $this->input->post('cat_name');
			$params['cat_image'] = $this->input->post('cat_image');
			$this->category_model->insert($params);
			$data['success_msg'] = "New category ".$params['cat_name']." added successfully!";
			$this->load->view('category_view', $data);
		}
	}
}
