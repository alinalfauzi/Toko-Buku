<?php
  class Userlogin_model extends CI_Model{
  public function ceklogin($username,$password){
      $this->db->where('user_user',$username);
      $this->db->where('pasword_user',$password);
      return $this->db->get('user_buku')->row();
    }
  }
 ?>
