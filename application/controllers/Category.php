<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	private $data;

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model(array('category_model'));

		$this->data['result'] = $this->category_model->get_categories();
		$this->data['img_path'] = base_url("assets/images/category/");
	}

	public function index(){
		$this->load->view('category/category_home', $this->data);
	}

	public function insert() {
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('cat_name', 'Category Name', 'required');
		
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		if ($this->form_validation->run() == FALSE)
		{
			//In case of a validation error
			$this->load->view('category/category_home');
		}
		else
		{
			//Insert data into category table
			$params['cat_name'] = $this->input->post('cat_name');
			$this->category_model->insert_into_category($params);

			redirect('category');
		}
	}

	public function update($id, $state = 1){
		if ($state == 1) {
			$temp = $this->category_model->get_specific_category($id);
			$this->data['cur_data'] = $temp[0];
			$this->load->view('category/category_update', $this->data);
		} else {
			if (isset($_POST['back'])) {
				redirect('category');
			} else {
				$data = array(
					'id' => $id,
					'fields' => array(
						'name' => $this->input->post('category')
					)
				);
				$this->category_model->update($data);

				redirect('category');
			}
		}
	}

	public function delete($id, $state = 1){
		if ($state == 1) {
			$temp = $this->category_model->get_specific_category($id);
			$this->data['cur_data'] = $temp[0];
			$this->load->view('category/category_delete', $this->data);
		} else {
			if (isset($_POST['back'])) {
				redirect('category');
			} else {
				$data = array(
					'id' => $id
				);
				$this->category_model->delete($data);

				redirect('category');
			}
		}
	}
}
