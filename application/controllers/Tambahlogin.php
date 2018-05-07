<?php
class Tambahlogin extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model("userlogin_model");
	}
	public function index()
	{
		$data = $this->db->get("user_buku");
		$this->load->view('login_tambah',$data);
	}
	public function save(){
		$nama = $this->input->post('nama');
		$level = $this->input->post('level');
		$jekel = $this->input->post('jk');
		$alamat = $this->input->post('alamat');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'nama_user'=>$nama,
			'level_user'=>$level,
			'jk_user'=>$jekel,
			'alamat_user'=>$alamat,
			'user_user'=>$username,
			'pasword_user'=>$password,
			'tglentri_user' =>date("Y-m-d H:I:S")
		);
			$insert = $this->db->insert("user_buku",$data);
			if ($insert) {
				echo "
					<script>
						alert('data berhasil disimpan !');
						window.location = '".base_url('login')."';
					</script>
				";
			}else {
				echo "
					<script>
						alert('data gagal di simpan !');
						window.location = '".base_url('tambahlogin')."';
					</script>
				";
			}
		}
}

 ?>
