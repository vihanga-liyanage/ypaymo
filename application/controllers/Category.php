<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
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
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('cat_name', 'Category Name', 'required');
		
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		if ($this->form_validation->run() == FALSE)
		{
			//In case of a validation error
			$this->load->view('category_view');
		}
		else
		{
			//uploading the image
			$config['upload_path'] = './assets/images/category/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '0';
			$config['max_width']  = '0';
			$config['max_height']  = '0';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload())
			{
				//if the uploading failed
				$error = array('image_error' => $this->upload->display_errors('<div class="error">', '</div>'));

				$this->load->view('category_view', $error);
			}
			else
			{
				$data = array('upload_data' => $this->upload->data());

				//Insert data into image table
				$this->category_model->insert_into_image($data);

				//Insert data into category table
				$upload_data = $data['upload_data'];
				$params['cat_name'] = $this->input->post('cat_name');
				$params['cat_image'] = $upload_data['file_name'];
				$this->category_model->insert_into_category($params);

				$data['success_msg'] = "New category '".$params['cat_name']."' added successfully!";
				$this->load->view('category_view', $data);
			}
		}
	}
}
