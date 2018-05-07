<?php
  class login_model extends CI_Model{
    function cek($username,$password){
      $this->db->where('usename_admin',$username);
      $this->db->where('password_admin',$password);
      return $this->db->get('admin');
    }
  }
 ?>
