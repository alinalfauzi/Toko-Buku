<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('login_views');
	}
	public function tambah(){
		$this->load->view('login_tambah');
	}
	public function masuk(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek = $this->login_model->cek($username,$password);
		if ($cek->num_rows() == 1) {
			foreach ($cek->result() as $data) {
				$sess_data['usename_admin'] = $data->usename_admin;//field
				$sess_data['password_admin'] = $data->password_admin;
				$sess_data['berhasil_login'] = true;

				$this->session->set_userdata($sess_data);
			}
			redirect('home');
		}
		else {
			redirect('welcome');
		}
	}
	public function keluar(){
		$this->session->sess_destroy();
		redirect('welcome');
	}
}
