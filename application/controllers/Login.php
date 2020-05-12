<?php 

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index() {
		$data['nama'] = 'Halaman Login Admin';
		$this->load->view('tema/head_login', $data);
		$this->load->view('admin/login');
		$this->load->view('tema/foot');
	}

	public function auth() {
		$username     = $this->input->post('username');
	    $password     = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );
        $periksa = $this->Login_model->periksa_masuk("users",$where)->num_rows();
	    if($periksa > 0) {
        $data_session  = array(
            'username'     => $username,
            'status' => "login"
        );
        $this->session->set_userdata($data_session);
        echo $this->session->set_flashdata('pesan','Login Sukses !');
            redirect('admin');
        }else{
            echo $this->session->set_flashdata('pesan','Username atau Password Anda salah !');
            redirect('login');
    		}
	}

	public function logout(){
            $this->session->sess_destroy();
            redirect('login');
    }
}