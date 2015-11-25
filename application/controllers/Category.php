<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	private $data;

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model(array('category_model'));
		$this->load->library('form_validation');

		$this->data['result'] = $this->category_model->get_categories();
		$this->data['img_path'] = base_url("assets/images/category/");

		$this->form_validation->set_rules('cat_name', 'Category Name', 'required');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	}

	public function index(){
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('category/category_home', $this->data);
		$this->load->view('templates/footer');
	}

	public function insert() {
		
		if ($this->form_validation->run() == FALSE) {
			//In case of a validation error
			$this->load->view('templates/header');
			$this->load->view('templates/nav');
			$this->load->view('category/category_home', $this->data);
			$this->load->view('templates/footer');
		} else {
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
			$this->load->view('templates/header');
			$this->load->view('templates/nav');
			$this->load->view('category/category_update', $this->data);
			$this->load->view('templates/footer');
		} else {
			if (isset($_POST['back'])) {
				redirect('category');
			} else {
				if ($this->form_validation->run() == FALSE)
				{
					//In case of a validation error
					$this->data['cur_data'] = array('catID' => $id);
					$this->load->view('templates/header');
					$this->load->view('templates/nav');
					$this->load->view('category/category_update', $this->data);
					$this->load->view('templates/footer');
				} else {
					$data = array(
						'id' => $id,
						'fields' => array(
							'name' => $this->input->post('cat_name')
						)
					);
					$this->category_model->update($data);

					redirect('category');
				}
			}
		}
	}

	public function delete($id, $state = 1){
		if ($state == 1) {
			$temp = $this->category_model->get_specific_category($id);
			$this->data['cur_data'] = $temp[0];
			$this->load->view('templates/header');
			$this->load->view('templates/nav');
			$this->load->view('category/category_delete', $this->data);
			$this->load->view('templates/footer');
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
