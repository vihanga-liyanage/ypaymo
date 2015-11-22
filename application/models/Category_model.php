<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

	protected $table = 'category';

	public function __construct() {
		parent::__construct();
	}

	public function insert_into_category($data) {
		$fields = array(
			'name' => $data['cat_name'],
			'image' => $data['cat_image']
		);

		$this->db->insert($this->table, $fields);
	}

	public function insert_into_image($data) {
		$this->db->insert('image', $data['upload_data']);
	}

	public function get_categories(){
		$query = $this->db->get($this->table);
		return $query->result_array();
	}
}