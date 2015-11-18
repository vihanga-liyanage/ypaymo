<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model(array('category_model'));
	}

	public function index()
	{
		$cat_name = NULL;
		$cat_image = NULL;
		$add_category = NULL;

		extract($_POST);

		$params['cat_name'] = $cat_name;
		$params['cat_image'] = $cat_image;

		if (isset($add_category)) {
			$this->category_model->insert($params);
		}

		$this->load->view('category_view');
	}
}
