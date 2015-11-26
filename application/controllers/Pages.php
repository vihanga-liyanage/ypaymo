<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	private $data;

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model(array('category_model', 'product_model'));
	}

	function view($page = 'home', $id = ''){

		if (!file_exists('application/views/pages/'.$page.'.php')) {
			show_404();

		} elseif ($page == "home") {
			$this->data[$page] = "";
			$this->data['categories'] = $this->category_model->get_categories(12);
			$this->load->view('templates/header');
			$this->load->view('templates/nav', $this->data);
			$this->load->view('templates/slider', $this->data);
			$this->load->view('pages/'.$page);
			$this->load->view('templates/footer');

		} elseif ($page == "categoryProducts") {

			$this->data[$page] = "";
			$this->data['product_details'] = $this->product_model->get_product_by_category($id);
			$tmp = $this->category_model->get_specific_category($id);
			$this->data['categoryName'] = $tmp[0]['name'];
			$this->load->view('templates/header');
			$this->load->view('templates/nav', $this->data);
			$this->load->view('pages/'.$page, $this->data);
			$this->load->view('templates/footer');

		} else {
			$this->data[$page] = "";

			$this->load->view('templates/header');
			$this->load->view('templates/nav', $this->data);
			$this->load->view('pages/'.$page);
			$this->load->view('templates/footer');
		}
	}
}
?>