<?php
  class After_login extends CI_Controller{
  function index(){
    if ($this->session->userdata('type')=='admin') {
      redirect('home');
    }else if($this->session->userdata('type')=='siswa'){
      redirect('login');
    }
  }
  }
 ?>
