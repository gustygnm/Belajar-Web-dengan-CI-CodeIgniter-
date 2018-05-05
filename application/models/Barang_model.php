<?php
defined('BASEPATH') OR exit('No direct script accsess allowed');
class Barang_model extends CI_Model{
  //select seluruh data dari tabel
    public function get_all(){
return $this->db->get('barang')->result() ;
  }

  public function get_id(){

  }
  //menambahkan data ke database
  public function create($data){
     return $this->db->insert('barang', $data);
}
public function update(){
      
}
public function delete(){
      
}
}