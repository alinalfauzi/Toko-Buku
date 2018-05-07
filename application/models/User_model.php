<?php
  class user_model extends CI_Model{
    function getAllData(){
      $query = $this->db->get("user_buku");
      return $query;
    }
  }
 ?>
