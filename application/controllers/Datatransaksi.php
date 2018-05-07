<?php
  class Datatransaksi extends CI_Controller{
    function __construct(){
      parent:: __construct();
      $this->load->model("transaksi_model");
      $this->load->helper(array('url','form'));
    }

    public function index(){
      if ($this->session->userdata('berhasil_login') != true) {
        redirect('welcome');
      }
      $data['query']=$this->transaksi_model->getAllData();
      $data['content'] = "data_transaksi";
      $this->load->view("template",$data,array('error'=>''));
      }
    public function tambah(){
      $data['content'] = 'trans_tambah';
      $this->load->view('template',$data);
    }
    public function save(){
      $pembeli = $this->input->post('pembeli');
      $nama = $this->input->post('nama');
      $pengarang = $this->input->post('pengarang');
      $harga = $this->input->post('harga');
      $jumlah = $this->input->post('jumlah');
      $tharga = $this->input->post('tharga');
      $data = array(
        'nama_trans'=>$pembeli,
        'buku_trans'=>$nama,
        'pengarang_trans'=>$pengarang,
        'harga_trans'=>$harga,
        'jumlah_trans'=>$jumlah,
        'total_trans'=>$tharga,
        'tgl_trans' =>date("Y-m-d H:I:S")
      );
        $insert = $this->db->insert("transaksi",$data);
        if ($insert) {
          echo "
            <script>
              alert('data berhasil disimpan !');
              window.location = '".base_url('datatransaksi')."';
            </script>
          ";
        }else {
          echo "
            <script>
              alert('data gagal di simpan !');
              window.location = '".base_url('datatransaksi/tambah')."';
            </script>
          ";
        }
      }
    //   //edit
      public function edit($id){
        $data['transaksi'] = $this->db->get_where('transaksi',['id_trans'=>$id])->row();
        $data['content'] = 'trans_edit';
        $this->load->view('template',$data);
      }
    //
      public function update(){
        $id = $this->input->post('id');
        $pembeli = $this->input->post('pembeli');
        $nama = $this->input->post('nama');
        $pengarang = $this->input->post('pengarang');
        $harga = $this->input->post('harga');
        $jumlah = $this->input->post('jumlah');
        $tharga = $this->input->post('tharga');
        $data = array(
          'nama_trans'=>$pembeli,
          'buku_trans'=>$nama,
          'pengarang_trans'=>$pengarang,
          'harga_trans'=>$harga,
          'jumlah_trans'=>$jumlah,
          'total_trans'=>$tharga,
          'tgl_trans' =>date("Y-m-d H:I:S")
        );
        $this->db->where('id_trans',$id);
          if ($this->db->update("transaksi",$data)) {
            echo "
              <script>
                alert('data berhasil disimpan !');
                window.location = '".base_url('datatransaksi')."';
              </script>
            ";
          }else {
            echo "
              <script>
                alert('data gagal di simpan !');
                window.location = '".base_url('datatransaksi/edit')."';
              </script>
            ";
          }
        }
        public function hapus(){
          $id=$this->input->post('id');
          $this->db->delete('transaksi',['id_trans'=>$id]);
    //       // $delete=$this->db->delete('data_buku',['id_buku'=>$id]);
    //       // if ($delete) {
    //       //   echo "
    //       //     <script>
    //       //       alert('data berhasil dihapus !');
    //       //     </script>
    //       //   ";
    //       // }else {
    //       //   echo "
    //       //     <script>
    //       //       alert('data gagal di hapus !');
    //       //     </script>
    //       //   ";
    //       // }
    //
          echo $id;
        }

        public function info()
        {

          $query = $this->transaksi_model->getAllData();

            if ($query->num_rows() > 0) {
                $no=1;
                foreach ($query->result() as $row) {
                  echo '
                    <tr>
                    <td>'.$no.'</td>
                    <td>'.$row->nama_trans.'</td>
                    <td>'.$row->buku_trans.'</td>
                    <td>'.$row->pengarang_trans.'</td>
                    <td>'.$row->harga_trans.'</td>
                    <td>'.$row->jumlah_trans.'</td>
                    <td>'.$row->total_trans.'</td>
                    <td>'.$row->tgl_trans.'</td>
                    <td><a href="'.base_url('datatransaksi/edit/'.$row->id_trans).'" class="btn btn-success btn-xs"><i class="fa fa-edit"> Edit</i></a>
                    <a href="#" data-id="'.$row->id_trans.'" class="btn btn-danger btn-xs btnhapus"><i class="fa fa-times"> Hapus</i></a>
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
