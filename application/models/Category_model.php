<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

	protected $table = 'category';

	public function __construct() {
		parent::__construct();
	}

	public function insert($data) {
		$fields = array(
			'name' => $data['cat_name'],
			'image' => $data['cat_image']
		);

		$this->db->insert($this->table, $fields);
	}
}