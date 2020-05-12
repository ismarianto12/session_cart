<?php 

class Cart extends CI_Controller{
	public function __construct() {
		parent::__construct();
		$this->load->library('cart');
	}

	public function index() {
		$items = $this->cart->contents();
		echo "<pre>";
		print_r($items);
		//echo "<pre>";
	}

	public function booking() {
		$data = array (
			'id' => 5784340,
			'name' => 'Jeans',
			'qty' => 0,
			'price' => 50000
							);
		$d = $this->cart->insert($data);
		echo "Berhasil Disimpan";
		redirect('cart');
	}

	public function delete() {
		$data = array (
			'rowid' => '871e5459344784668bbcaf6594128572',
			'qty' => 0
		);

		$this->cart->update($data);
	}

	public function update() {
		$data = array(
        	'rowid' => '871e5459344784668bbcaf6594128572',
        	'qty'   => 3
		);

		$this->cart->update($data);
	}


}