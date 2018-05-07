<?php
  class Transaksi_model extends CI_Model{
    function getAllData(){
      $query = $this->db->get("transaksi");
      return $query;
    }
  }
 ?>
