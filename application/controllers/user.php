<?php
class User extends CI_Controller{
  function index(){
    
    $data['content']='user_view';
    $data['data'] = array(
      'buku' => $this->db->get('data_buku')
    );

    $this->load->view("user_template",$data);
  }
  }

 ?>
