<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model(array('category_model'));
	}

	public function index(){
		$data = array(
			'cat_name' => "", 
			'cat_image' => "",
			'cat_nameErr' => "",
			'cat_imageErr' => ""
		);
		$this->load->view('category_view', $data);
	}

	public function test(){
		echo "test";
	}

	public function insert()
	{
		$isValid = array(False, False);

		$cat_name = $cat_image = $add_category = $cat_nameErr = $cat_imageErr = "";

		extract($_POST);

		if (empty($cat_name)) {
			$cat_nameErr = "Category name cannot be empty";
			$isValid[0] = False;
		} else {
			$params['cat_name'] = $cat_name;
			$isValid[0] = True;
		}

		if (empty($cat_image)) {
			$cat_imageErr = "Category image cannot be empty";
			$isValid[1] = False;
		} else {
			$params['cat_image'] = $cat_image;
			$isValid[1] = True;
		}
		
		if (isset($add_category) and (count(array_keys($isValid, True)) == count($isValid))) {
			$this->category_model->insert($params);
		}

		$data = array(
			'cat_name' => $cat_name, 
			'cat_image' => $cat_image,
			'cat_nameErr' => $cat_nameErr, 
			'cat_imageErr' => $cat_imageErr
		);

		$this->load->view('category_view', $data);
	}
}
