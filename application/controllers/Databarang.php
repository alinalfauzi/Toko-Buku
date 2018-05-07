<?php
  class Databarang extends CI_Controller{
    function __construct(){
      parent:: __construct();
      $this->load->model("barang_model");
      $this->load->helper(array('url','form'));
    }

    public function index(){
      if ($this->session->userdata('berhasil_login') != true) {
        redirect('welcome');
      }

      $row = $this->barang_model->baris();
      $config['base_url'] = 'http://localhost/shopbuku/databarang/index/';
      $config['total_rows'] = $row;
      $config['per_page'] = 5;


      $start = $this->uri->segment(3);
      $this->pagination->initialize($config);

      $data['query']=$this->barang_model->getAllData();
      $data['content'] = "data_barang";
       $this->load->view("template",$data,array('error'=>''));
     }
    public function tambah(){
      $data['content'] = 'barang_tambah';
      $this->load->view('template',$data);
    }
    public function save(){
      $config['upload_path']          = './images/';
      $config['allowed_types']        = 'gif|jpg|png';
      $this->load->library('upload', $config);
      $this->upload->do_upload('berkas');
      echo $this->upload->display_errors();

      $nama = $this->input->post('nama');
      $pengarang = $this->input->post('pengarang');
      $kategori = $this->input->post('kategori');
      $harga = $this->input->post('harga');
      $stok = $this->input->post('stok');
      $terjual = $this->input->post('terjual');
      $deskripsi = $this->input->post('deskripsi');
      $data = array(
        'nama_buku'=>$nama,
        'pengarang_buku'=>$pengarang,
        'kategori_buku'=>$kategori,
        'harga_buku'=>$harga,
        'stok_buku'=>$stok,
        'terjual_buku'=>$terjual,
        'deskripsi_buku'=>$deskripsi,
        'tglentri_buku' =>date("Y-m-d H:I:S"),
        'foto_buku' => $this->upload->data('file_name')
      );
        $insert = $this->db->insert("data_buku",$data);
        if ($insert) {
          echo "
            <script>
              alert('data berhasil disimpan !');
              window.location = '".base_url('databarang')."';
            </script>
          ";
        }else {
          echo "
            <script>
              alert('data gagal di simpan !');
              window.location = '".base_url('Databarang/tambah')."';
            </script>
          ";
        }
      }
      //edit
      public function edit($id){
        $data['data_buku'] = $this->db->get_where('data_buku',['id_buku'=>$id])->row();
        $data['content'] = 'barang_edit';
        $this->load->view('template',$data);
      }

      public function update(){
          $config = array(
    			'upload_path' => './images',
    			'allowed_types' => 'gif|jpg|JPG|png',);

          $this->load->library('upload', $config);
      		$this->upload->do_upload('file_upload');
      		$upload_data = $this->upload->data();
      		$file_name = $upload_data['file_name'];

        $id=$this->input->post('id');
        $nama = $this->input->post('nama');
        $pengarang = $this->input->post('pengarang');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $terjual = $this->input->post('terjual');
        $deskripsi = $this->input->post('deskripsi');
        $data = array(
          'nama_buku'=>$nama,
          'pengarang_buku'=>$pengarang,
          'kategori_buku'=>$kategori,
          'harga_buku'=>$harga,
          'stok_buku'=>$stok,
          'terjual_buku'=>$terjual,
          'deskripsi_buku'=>$deskripsi,
          'tglentri_buku' =>date("y-m-d H:I:S"),
          'foto_buku' => $this->upload->data('file_name')
        );

        $this->db->where('id_buku',$id);
          if ($this->db->update("data_buku",$data)) {
            echo "
              <script>
                alert('data berhasil disimpan !');
                window.location = '".base_url('databarang')."';
              </script>
            ";
          }else {
            echo "
              <script>
                alert('data gagal di simpan !');
                window.location = '".base_url('databarang/edit')."';
              </script>
            ";
          }
        }
        public function hapus(){
          $id=$this->input->post('id');
          $this->db->delete('data_buku',['id_buku'=>$id]);
          // $delete=$this->db->delete('data_buku',['id_buku'=>$id]);
          // if ($delete) {
          //   echo "
          //     <script>
          //       alert('data berhasil dihapus !');
          //     </script>
          //   ";
          // }else {
          //   echo "
          //     <script>
          //       alert('data gagal di hapus !');
          //     </script>
          //   ";
          // }

          echo $id;
        }

        public function info()
        {

          $query = $this->barang_model->getAllData();

            if ($query->num_rows() > 0) {
                $no=1;
                foreach ($query->result() as $row) {
                  echo '
                    <tr>
                    <td>'.$no.'</td>
                    <td><img src="'.base_url('images/'.$row->foto_buku).'" width="85px" height="55px"></td>
                    <td>'.$row->nama_buku.'</td>
                    <td>'.$row->pengarang_buku.'</td>
                    <td>'.$row->kategori_buku.'</td>
                    <td>'.$row->harga_buku.'</td>
                    <td>'.$row->stok_buku.'</td>
                    <td>'.$row->terjual_buku.'</td>
                    <td><a href="'.base_url('databarang/edit/'.$row->id_buku).'" class="btn btn-success btn-xs"><i class="fa fa-edit"> Edit</i></a>
                    <a href="#" data-id="'.$row->id_buku.'" class="btn btn-danger btn-xs btnhapus"><i class="fa fa-times"> Hapus</i></a>
                    </td>
                    </tr>
                  ';$no++;
                }
            }else {
              echo '<td colspan="8" style="text-align:center;">Data Masih Konsong</td>';
            }


        }
}
?>
