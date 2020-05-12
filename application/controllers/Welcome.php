<?php

class Welcome extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Welcome_model');
		$this->load->library('cart'); // panggil library cart
		$this->load->library('form_validation');
	}

	// fungsi untuk menampilkan kamar dan alat yang tersedia di database
	public function index() {
		$data['jml_item'] = count($this->cart->contents());
		$data['kamar_item'] = $this->cart->contents();
		$data['kamar'] = $this->Welcome_model->get_all_kamar(); // memanggil query dari Welcome_model

		$this->load->view('tema/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('tema/footer');
	}

	//fungsi menampilkan di ketegori
	public function kamar(){
		$data ['kamar'] = $this->Welcome_model->data_kamar()->result();

		$this->load->view('tema/header', $data);
		$this->load->view('home/index', $data);
		$this->load->view('tema/footer');
	}
	// fungsi menampilkan keranjang
	public function keranjang() {
		$data['jml_item'] = count($this->cart->contents());
		$data['kamar_item'] = $this->cart->contents();
		$data['kamar'] = $this->cart->contents();
		
		$this->load->view('tema/header', $data);
		$this->load->view('home/keranjang', $data);
		$this->load->view('tema/footer');
	}

	// fungsi untuk menyimpan data bookingan
	public function booking() {
		$data_kamar = array (
			'id' => $this->input->post('id'),
			'name' => $this->input->post('nama'),
			'qty' => $this->input->post('qty'),
			'price' => $this->input->post('price')
							);
		$this->cart->insert($data_kamar); // fungsi menyimpan di library cart, bukan ke database
		redirect('welcome');
		$this->session->set_flashdata('id_booking');
		$this->session->set_flashdata('subtotal');
	}

	// 2 pilihan saat mengapus isi keranjang
	public function hapus($rowid) {
		if ($rowid=="all")
			{
				$this->cart->destroy(); // fungsi menghapus semua isi keranjang
			}
		else
			{
				$data = array('rowid' => $rowid, //menghapus berdasarkan item yg di pilih
			  				  'qty' =>0);
				$this->cart->update($data);
			}
		redirect('welcome/keranjang');
	}

	// fungsi pengisian data peminjam
	public function isi_data() {
		$data['nama'] = 'Pengisian Data';
		$data['jml_item'] = count($this->cart->contents());
		$data['kamar_item'] = $this->cart->contents();
		$this->db->like('tgl_chekin', $this->input->post('tgl_chekin'));
		$this->db->like('tgl_chekout', $this->input->post('tgl_chekout'));
		$this->form_validation->set_rules('nama', 'Nama Penginapan', 'required');
		$this->form_validation->set_rules('penyewa', 'Nama Penyewa', 'required');
		$this->form_validation->set_rules('no_hp', 'Nomor Hp', 'required');
		$this->form_validation->set_rules('subtotal', 'Total Harga', 'required');
		if($this->form_validation->run() == FALSE) {
		$this->load->view('tema/header', $data);
		$this->load->view('home/data_peminjam', $data);
		$this->load->view('tema/footer');
	}else {
		$this->db->trans_start();
		$this->Welcome_model->pemesanan(); // jalankan fungsi pengirim data booking yg ada di Welcome_model
		$insert_id = $this->db->insert_id();
     	$this->cart->destroy(); //kosongkan keranjang booking setelah mengirim pemesanan
		$this->db->trans_complete();
		redirect('welcome/sukses/'.$insert_id); // setelah itu akan di arahkan ke halaman sukses
	}
		
	}

	// fungsi untuk menampilkan halaman sukses setelah mengirim pemesanan kamar
	public function sukses($id_booking ='') { 
		if ($id_booking == '') {
			echo "data tidak terparsing dengan baik";
			exit();
		}
		$data['nama'] = 'Booking Berhasil';
		$data['jml_item'] = count($this->cart->contents());
		$data['kamar_item'] = $this->cart->contents();
		$data['kamar'] = $this->Welcome_model->DetailBooking($id_booking); 
		$this->form_validation->set_rules('id_booking', 'Kode Booking', 'required');
		if($this->form_validation->run() == FALSE) {
		$this->load->view('tema/header', $data);
		$this->load->view('home/sukses', $data);
		$this->load->view('tema/footer');
		}else {
		$this->Admin_model->get_bookingan();
	}
}

	public function exportToPdf(){

    $this->load->library('dompdf_gen');
    $id_booking = $this->session->userdata('id_booking');
    $data['user'] = $this->session->userdata('nama_penginapan');
    $data['bookingan'] = $this->db->query('select*from bookingan booking, set bookingan.id_booking=id_booking where bookingan.id_booking=id_booking');

    $this->load->view('home/buktipdf', $data);

    $paper_size  = 'A4'; // ukuran kertas
    $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);
             //Convert to PDF
    $this->dompdf->load_html($html);
    $this->dompdf->render();
    $this->dompdf->stream("bukti-booking.pdf", array('Attachment' => 0));
             // nama file pdf yang di hasilkan
}
}
