<?php
  class Barang_model extends CI_Model{
    function getAllData(){
      return $query = $this->db->get("data_buku");
    }
    function baris(){
      return $this->db->get("data_buku")->num_rows();
    }
  }
 ?>
