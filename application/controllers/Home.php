<?php
  class Home extends CI_Controller{
    function index(){
      // if ($this->session->userdata('berhasil_login') != true) {
      //   redirect('welcome');
      // }
      $data['content']='home_view';
      $data['data'] = array(
        'buku' => $this->db->get('data_buku')
      );

      $this->load->view("template",$data);
    }
  }

 ?>
