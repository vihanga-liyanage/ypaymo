<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	private $data;
	private $username = "admin";
	private $password = "ypaymoadmin";

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
	}

	public function index() {
		if ($this->session->userdata('logged_in')) {
			
			$this->data['admin_logged'] = $this->session->userdata('logged_in');

			$this->load->view('templates/header', $this->data);
			$this->load->view('admin_home', $this->data);
			$this->load->view('templates/footer');
		} else {
			$this->load->view('templates/header', $this->data);
			$this->load->view('admin_login', $this->data);
			$this->load->view('templates/footer');
		}
	}

	public function check($username, $password) {
		if ($username == $this->username) {
			if ($password == $this->password) {
				return TRUE;
			} else {
				$this->data['login_error'] = 'Username or password is incorrect!';
				return FALSE;
			}
		} else {
			$this->data['login_error'] = 'Username or password is incorrect!';
			return FALSE;
		}
	}

	public function auth() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'User Name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		if ($this->form_validation->run() == FALSE) {
			//In case of a validation error
			$this->load->view('templates/header');
			$this->load->view('admin_login', $this->data);
			$this->load->view('templates/footer');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			if ($this->check($username, $password)) {
				$newdata = array(
                   'logged_in' => TRUE
               	);

				$this->session->set_userdata($newdata);
				redirect('administrator');

			} else {
				//Username or password mismatch
				$this->load->view('templates/header');
				$this->load->view('admin_login', $this->data);
				$this->load->view('templates/footer');
			}
		}
	}

	public function signout() {
		$newdata = array(
           'logged_in' => FALSE
       	);

		$this->session->set_userdata($newdata);
		redirect('administrator');
	}
}
?>