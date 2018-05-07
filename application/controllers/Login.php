<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model("userlogin_model");
	}
	public function index()
	{
		$this->load->view('login_user');
	}
	public function tambah(){
		$this->load->view('login_tambah');
	}
	public function masuk(){
		if (isset($_POST['login'])) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$cek = $this->userlogin_model->ceklogin($username,$password);
			$hasil = count($cek);
			if ($hasil > 0) {
				$query=$this->db->get_where('user_buku',['user_user'=>$username,'pasword_user'=>$password])->row();
				$data=array(
					'username'=>$query->user_user,
					'level'=>$query->level_user
				);
				$this->session->set_userdata($data);

				if ($this->session->userdata('level')=='user') {
				 redirect('user');
			 }else if($this->session->userdata('level')=='admin'){
				 redirect('home');
			 }

			}else {
				echo "<script>alert('Gagal Login');window.location='".base_url('login')."';</script>";
			}
		}
		// $username = $this->input->post('username');
		// $password = $this->input->post('password');
		//
		// $cek = $this->userlogin_model->ceklogin($username,$password);
		// if ($cek->num_rows() == 1) {
		// 	foreach ($cek->result() as $data) {
		// 		$sess_data['user_user'] = $data->user_user;
		// 		$sess_data['password_user'] = $data->password_user;
		// 		$sess_data['berhasil_login'] = true;
		//
		// 		$this->session->set_userdata($sess_data);
		// 	}
		// 	redirect('user');
		// }
		// else {
		// 	echo "<script>alert('Gagal Login');window.location='".base_url('login')."';</script>";
		// }
	}
	public function keluar(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
