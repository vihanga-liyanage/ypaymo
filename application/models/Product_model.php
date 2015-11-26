<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {
    protected $table = 'product';
    public function __construct() {
        parent::__construct();
    }
    public function insert_into_product($data) {

        $fields = array(

            'name' => $data['name'],
            'description'=> $data['description'],
            'availableQuality'=> $data['availableQuality'],
            'unitPrice'=> $data['unitPrice'],
            'subCategory'=> $data['subCategory'],
            'discount'=> $data['discount'],
            'brand'=> $data['brand'],
            'warrantyType'=> $data['warrantyType'],
            'warrantyPeriod'=> $data['warrantyPeriod'],
            'model'=> $data['model'],
            'dimension'=> $data['dimension'],
            'weight'=> $data['weight'],
            'fileName'=> $data['fileName']
        );

        $this->db->insert($this->table, $fields);

    }
    public function insert_into_image($data) {
        $this->db->insert('image', $data['upload_data']);
    }

    public function get_product(){
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    public function get_product_by_category($catId) {
        $this->db->select('p.fileName, p.name, p.unitPrice, c.name AS category');
        $this->db->where(array('c.catID' => $catId));
        $this->db->from('product AS p');// I use aliasing make joins easier
        $this->db->join('subcategory AS sc', 'p.subCategory = sc.scatID', 'INNER');
        $this->db->join('category AS c', 'sc.category = c.catID', 'INNER');
        $query = $this->db->get();
        return $query->result_array();
        
    }

    public function get_given_product($id){
        $this->db->where(array('PId' => $id));
        $query = $this->db->get($this->table);
        return $query->result_array();
    }

    public function update($data){
        $this->db->where(array('PId' => $data['id']));
        $this->db->update($this->table, $data['fields']);
    }
    
    public function delete($data){
        $this->db->where(array('PId' => $data['id']));
        $this->db->delete($this->table);
    }
}
?>