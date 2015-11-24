<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {


	function view($page = 'home'){

		if (!file_exists('application/views/pages/'.$page.'.php')) {
			show_404();

		} else {
			$data[$page] = "";

			$this->load->view('templates/header');
			$this->load->view('templates/nav', $data);
			$this->load->view('pages/'.$page);
			$this->load->view('templates/footer');
		}

		
	}

}
?>