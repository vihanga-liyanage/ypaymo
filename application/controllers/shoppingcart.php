<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShoppingCart extends CI_Controller{
	public function buy($id){
		$this->load->view('templates/header');
        $this->load->view('templates/nav');
		$this->load->model('mproduct');
		$product = $this -> mproduct -> find($id);
		$data = array(
			'id' => $product -> PId,
			'qty' => 1,
			'price' => $product -> unitPrice,
			'name' => $product -> name
		);
		
		$this->cart->insert($data);
		$this->load->view('cart');
		$this->load->view('templates/footer');
	}
	public function delete($rowid){
		$this->load->view('templates/header');
        $this->load->view('templates/nav');
		$this->cart->update(array('rowid'=>$rowid,'qty'=>0));
		$this->load->view('cart');
		$this->load->view('templates/footer');
	}
	public function update(){
		$this->load->view('templates/header');
        $this->load->view('templates/nav');
		$i=1;
		foreach($this->cart->contents() as $items){
			$this -> cart -> update(array('rowid' => $items['rowid'],'qty'=>$_POST['qty'.$i]));
			$i++;
		}
		$this->load->view('cart');
		$this->load->view('templates/footer');
	}
}