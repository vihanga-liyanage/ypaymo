<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubCategory extends CI_Controller {

	private $data;

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model(array('subcategory_model', 'category_model'));

		$this->data['categoryInfo'] = $this->category_model->get_category_touples();
		$this->data['result'] = $this->subcategory_model->get_sub_categories();
		$this->data['admin_logged'] = $this->session->userdata('logged_in');

		$this->load->library('form_validation');

		$this->form_validation->set_rules('subcategory', 'Sub Category Name', 'required');
		$this->form_validation->set_rules('category', 'Category', 'greater_than[0]');
		$this->form_validation->set_message('greater_than', 'Please select a valid %s');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	}

	public function index(){
		if ($this->session->userdata('logged_in')) {
            
            $this->data['admin_logged'] = $this->session->userdata('logged_in');

            $this->load->view('templates/header', $this->data);
            $this->load->view('subcategory/sub_category_home', $this->data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/header', $this->data);
            $this->load->view('admin_login', $this->data);
            $this->load->view('templates/footer');
        }
	}

	public function insert()
	{
		if ($this->form_validation->run() == FALSE)
		{
			//In case of a validation error
			$this->index();
		}
		else
		{
			//Insert data into sub category table
			$params['subcategory'] = $this->input->post('subcategory');
			$params['category'] = $this->input->post('category');
			$this->subcategory_model->insert($params);

			redirect('subcategory');
		}
	}

	public function update($id, $state = 1){
		if ($state == 1) {
			$this->data['categoryInfo'] = $this->category_model->get_category_touples();
			$temp = $this->subcategory_model->get_specific_subcategory($id);
			$this->data['cur_data'] = $temp[0];

			$this->load->view('templates/header', $this->data);
			$this->load->view('templates/nav');
			$this->load->view('subcategory/sub_category_update', $this->data);
			$this->load->view('templates/footer');
		} else {
			if (isset($_POST['back'])) {
				redirect('subcategory');
			} else {
				if ($this->form_validation->run() == FALSE)
				{
					//In case of a validation error
					$this->data['cur_data'] = array('scatID' => $id);
					$this->load->view('templates/header', $this->data);
					$this->load->view('templates/nav');
					$this->load->view('subcategory/sub_category_update', $this->data);
					$this->load->view('templates/footer');
				} else {
					$data = array(
						'id' => $id,
						'fields' => array(
							'name' => $this->input->post('subcategory'),
							'category' => $this->input->post('category')
						)
					);
					$this->subcategory_model->update($data);

					redirect('subcategory');
				}
			}
		}
	}

	public function delete($id, $state = 1){
		if ($state == 1) {
			$this->data['categoryInfo'] = $this->category_model->get_category_touples();
			$temp = $this->subcategory_model->get_specific_subcategory($id);
			$this->data['cur_data'] = $temp[0];

			$this->load->view('templates/header', $this->data);
			$this->load->view('templates/nav');
			$this->load->view('subcategory/sub_category_delete', $this->data);
			$this->load->view('templates/footer');
		} else {
			if (isset($_POST['back'])) {
				redirect('subcategory');
			} else {
				$data = array(
					'id' => $id
				);
				$this->subcategory_model->delete($data);

				redirect('subcategory');
			}
		}
	}
}
?>