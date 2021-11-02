<?php

class Model_Orang extends CI_Model {
    public function AmbilDataOrang() {
      $this->load->database();

      $hasil = $this->db->query("SELECT * FROM orang");

      return $hasil->result();
    }

    public function ProsesTambahOrang($nama, $alamat) {
      $this->load->database();
      
      $this->db->query ("INSERT INTO orang(nama,alamat) VALUES('$nama','$alamat')");
    }

    public function prosesHapusOrang($id) {
      $this->load->database();

      $this->db->query("DELETE FROM orang WHERE id = $id");
    }

    public function ProsesUbahOrang($id, $nama, $alamat) {
      $this->load->database();

      $this->db->query("UPDATE orang SET nama = '$nama', alamat = '$alamat' WHERE id = $id");
    }
}

?>