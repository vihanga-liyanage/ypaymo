<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductInsert_model extends CI_Model {
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
            'dateAdded'=> $data['dateAdded'],
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
}
?>