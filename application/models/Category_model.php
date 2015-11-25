<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model {

	protected $table = 'category';

	public function __construct() {
		parent::__construct();
	}

	public function insert_into_category($data) {
		$fields = array(
			'name' => $data['cat_name']
		);

		$this->db->insert($this->table, $fields);
	}

	public function get_categories($limit = ''){
		if ($limit == '') {
			$query = $this->db->get($this->table);
		} else {
			$query = $this->db->get($this->table, $limit);
		}
		
		return $query->result_array();
	}

	public function get_category_touples(){
		$query = $this->db->get($this->table);
		$result = $query->result_array();
		$output['0'] = "";
		foreach ($result as $record) {
			$output[$record['catID']] = $record['name'];
		}
		return $output;
	}

	public function get_specific_category($id){
		$this->db->where(array('catID' => $id));
		$query = $this->db->get($this->table);
		return $query->result_array();
	}

	public function update($data){
		$this->db->where(array('catID' => $data['id']));
		$this->db->update($this->table, $data['fields']);
	}

	public function delete($data){
		$this->db->where(array('catID' => $data['id']));
		$this->db->delete($this->table);
	}
}