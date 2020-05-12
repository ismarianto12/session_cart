<?php 

class Welcome_model extends CI_Model {
	// query untuk menampilkan isi database pada tabel kamar
	public function get_all_kamar() {
		return $this->db->get('kamar')->result_array();
	}

	// query untuk menampilkan isi database pada tabel kamar berdasarkan id
	public function kamar_id($id) {
		return $this->db->get_where('kamar', ['id' => $id])->row_array();
	}
	
	public function cekData($where = null) 
    { 
        return $this->db->get_where('user', $where); 
	}
	public function userdata($where = null)
    {
        return $this->db->get_where('id',  $where);

	}
	public function insertPembayaran($data){
		return $this->db->insert('pembayaran', $data);
	}

	public function getPembayaran(){
		return $this->db->get('pembayaran');
	}

	public function getPembayaranWhere($kode){
		$this->db->where('no_booking', $kode);
		return $this->db->get("pembayaran");
	}
	public function booking($data)
	{
		$this->db->select('bookingan.*, bookingan_detail.*');
		$this->db->where($data);
		$this->db->like('tgl_chekin', $this->input->post('tgl_chekin'));
		$this->db->like('tgl_chekout', $this->input->post('tgl_chekout'));
        $this->db->from('bookingan');
		$this->db->join('bookingan_detail', 'bookingan_detail.id_booking=bookingan.id_booking');

		return $this->db->get();
	}

	// query untuk menyimpan pemesanan ke dalam database
	public function pemesanan() {
		$tglsekarang = date('Y-m-d');
		$data = array (
			'id_booking'		=>"KM_". rand(111111, 999999),
			'id_kamar'			=>$this->input->post('id_kamar'),
			'nama_penginapan'	=>$this->input->post('nama'),
			'nama_penyewa'		=>$this->input->post('penyewa'),
			'no_hp'				=>$this->input->post('no_hp'),
			'stok'				=>$this->db->query("UPDATE kamar SET kamar.stok=kamar.stok-1 where kamar.nama_penginapan= 'nama_penginapan'"),
			'total_harga'		=>$this->input->post('subtotal'),
			'tgl_chekin' 		=>$this->input->post('tgl_chekin'),
			'tgl_chekout' 		=>$this->input->post('tgl_chekout')
		);
		$this->db->insert('bookingan', $data);
		$this->session->set_flashdata('id_booking');
	}


	public function DetailBooking($id_boking)
	{ 
		return $this->db->select('*')
							->from('bookingan')
							->join('kamar','kamar.id=bookingan.id_kamar','left')
							->where('bookingan.id',$id_boking)
							->get();
	}
}