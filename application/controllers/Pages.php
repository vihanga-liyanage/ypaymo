<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	private $data;

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model(array('category_model'));
	}

	function view($page = 'home'){

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

		} elseif ($page == "category") {
			$this->data[$page] = "";
			$this->data['categories'] = $this->category_model->get_categories();
			$this->load->view('templates/header');
			$this->load->view('templates/nav', $this->data);
			$this->load->view('templates/slider', $this->data);
			$this->load->view('pages/'.$page);
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