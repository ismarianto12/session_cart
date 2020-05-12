<?php 

class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('status') != "login") {
			redirect('login');
		}
		$this->load->model('Admin_model');
		$this->load->model('Welcome_model');
		$this->load->library('form_validation');
		$this->load->library('upload');
	}

	public function index() {
		$data['nama'] = 'Halaman Admin';
		$data['bookingan'] = $this->Admin_model->get_bookingan();
		$data['jumlah'] = $this->db->get('bookingan')->num_rows();
		
		$this->load->view('tema/head', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('tema/foot');
	}


	public function kamar() {
		$data['nama'] = 'Daftar Kamar';
		$data['kamar'] = $this->Welcome_model->get_all_kamar();
		$data['jumlah'] = $this->db->get('bookingan')->num_rows();
		$this->load->view('tema/head', $data);
		$this->load->view('admin/kamar', $data);
		$this->load->view('tema/foot');
	}

	public function tambah_kamar() {
		$data['nama'] = 'Tambah Data Kamar';
		$data['jumlah'] = $this->db->get('bookingan')->num_rows();
		$this->form_validation->set_rules('nama', 'Nama Penginapan', 'required');
		$this->form_validation->set_rules('pemilik', 'Nama Pemilik', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		$this->form_validation->set_rules('stok', 'Stok', 'required');
		if($this->form_validation->run() == FALSE) {
		$this->load->view('tema/head', $data);
		$this->load->view('admin/input');
		$this->load->view('tema/foot');
	}else {
		$this->Admin_model->input_kamar();
		$this->session->set_flashdata('flash', 'Data Kamar Berhasil Ditambahkan');
		redirect('admin/tambah_kamar');
	}
	}

	public function edit_kamar($id) {
		$data['nama'] = 'Edit Data Kamar';
		$data['jumlah'] = $this->db->get('bookingan')->num_rows();
		$data['kamar'] = $this->Admin_model->kamar_id($id);
		$this->form_validation->set_rules('nama', 'Nama Penginapan', 'required');
		$this->form_validation->set_rules('pemilik', 'Nama Pemilik', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		$this->form_validation->set_rules('stok', 'Stok', 'required');
		if($this->form_validation->run() == FALSE) {
		$this->load->view('tema/head', $data);
		$this->load->view('admin/edit', $data);
		$this->load->view('tema/foot');
	}else {
		$this->Admin_model->ubah_kamar();
		$this->session->set_flashdata('flash', 'Data Kamar Berhasil Diubah');
		redirect('admin/kamar');
	}
	}

	public function hapus_kamar($id) {
		$path = './assets/img/';
        @unlink($path.$gambar);

		$this->Admin_model->delete_kamar($id);
		$this->session->set_flashdata('pesanhapus', 'Data Kamar Berhasil Dihapus');
		redirect('admin/kamar');
	}

	public function kontak() {
		$data['nama'] = 'Hubungi Saya';
		$data['jumlah'] = $this->db->get('bookingan')->num_rows();
		$this->load->view('tema/head', $data);
		$this->load->view('admin/kontak');
		$this->load->view('tema/foot');
	}

	public function tentang() {
		$data['nama'] = 'Tentang Aplikasi Ini';
		$data['jumlah'] = $this->db->get('bookingan')->num_rows();
		$this->load->view('tema/head', $data);
		$this->load->view('admin/tentang');
		$this->load->view('tema/foot');
	}

	public function daftarBooking()
    {
    	$data['nama'] = 'Daftar Booking';
		$data['bookingan'] = $this->Admin_model->get_bookingan();
		$data['jumlah'] = $this->db->get('bookingan')->num_rows();
		$this->load->view('tema/head', $data);
		$this->load->view('admin/daftarbooking', $data);
		$this->load->view('tema/foot');
	}

}