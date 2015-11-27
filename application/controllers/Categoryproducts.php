<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoryproducts extends CI_Controller {

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
}
?>