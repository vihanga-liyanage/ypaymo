<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subcategory_model extends CI_Model {

	protected $table = 'subcategory';

	public function __construct() {
		parent::__construct();
	}

	public function insert($data) {
		$fields = array(
			'name' => $data['subcategory'],
			'category' => $data['category']
		);

		$this->db->insert($this->table, $fields);
	}

	public function get_sub_categories(){
		$query = $this->db->get($this->table);
		return $query->result_array();
	}

	public function get_specific_subcategory($id){
		$this->db->where(array('scatID' => $id));
		$query = $this->db->get($this->table);
		return $query->result_array();
	}

	public function update($data){
		$this->db->where(array('scatID' => $data['id']));
		$this->db->update($this->table, $data['fields']);
	}

	public function delete($data){
		$this->db->where(array('scatID' => $data['id']));
		$this->db->delete($this->table);
	}
}
?>