<?php
  class Datauser extends CI_Controller{
    function __construct(){
      parent:: __construct();
      $this->load->model("user_model");
    }

    public function index(){
      if ($this->session->userdata('berhasil_login') != true) {
        redirect('welcome');
      }
      $data['query']=$this->user_model->getAllData();
      $data['content'] = "data_user";
      $this->load->view("template",$data);
    }
    public function info()
    {
      $query = $this->user_model->getAllData();
    if ($query->num_rows() > 0) {
          $no=1;
          foreach ($query->result() as $row) {
            echo '
              <tr>
              <td>'.$no.'</td>
              <td>'.$row->nama_user.'</td>
              <td>'.$row->level_user.'</td>
              <td>'.$row->jk_user.'</td>
              <td>'.$row->alamat_user.'</td>
              <td>'.$row->user_user.'</td>
              <td>'.$row->pasword_user.'</td>
              <td><a href="'.base_url('datauser/edit/'.$row->id_user).'" class="btn btn-success btn-xs"><i class="fa fa-edit"> Edit</i></a>
              <a href="#" data-id="'.$row->id_user.'" class="btn btn-danger btn-xs btnhapus"><i class="fa fa-times">Hapus</i></a>
              </td>
              </tr>
            ';$no++;
          }
      }else {
        echo '<td colspan="8" style="text-align:center;">Data Masih Konsong</td>';
      }


    }
    //tambah
    public function tambah(){
      $data['content'] = 'user_tambah';
      $this->load->view('template',$data);
    }
    public function save(){
      $nama = $this->input->post('nama');
      $level = $this->input->post('level');
      $jekel = $this->input->post('jekel');
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
              window.location = '".base_url('datauser')."';
            </script>
          ";
        }else {
          echo "
            <script>
              alert('data gagal di simpan !');
              window.location = '".base_url('Datauser/tambah')."';
            </script>
          ";
        }
      }
      //hapus
      public function hapus(){
        $id=$this->input->post('id');
        $this->db->delete('user_buku',['id_user'=>$id]);
        echo $id;
      }
      //Edit
      //edit
      public function edit($id){
        $data['user_buku'] = $this->db->get_where('user_buku',['id_user'=>$id])->row();
        $data['content'] = 'user_edit';
        $this->load->view('template',$data);
      }

      public function update(){
        $id=$this->input->post('id');
        $nama = $this->input->post('nama');
        $level = $this->input->post('level');
        $jekel = $this->input->post('jekel');
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

        $this->db->where('id_user',$id);
          if ($this->db->update("user_buku",$data)) {
            echo "
              <script>
                alert('data berhasil disimpan !');
                window.location = '".base_url('datauser')."';
              </script>
            ";
          }else {
            echo "
              <script>
                alert('data gagal di simpan !');
                window.location = '".base_url('datauser/edit')."';
              </script>
            ";
          }
        }


      }

?>
