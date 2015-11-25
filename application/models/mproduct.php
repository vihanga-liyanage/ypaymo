<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MProduct extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }
	public function findAll(){
		return $this->db->get('product')->result();
		
	}
	public function find($id){
		$this->db->where('PId',$id);
		return $this->db->get('product')->row();
	}
}