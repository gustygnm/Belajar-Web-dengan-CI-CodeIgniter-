<?php
defined('BASEPATH') OR exit('No direct script accsess allowed');
class User_model extends CI_Model{
  //select seluruh data dari tabel
   public function get_all(){
	return $this->db->get('user')->result() ;
  }

  public function get_id(){

  }
  //menambahkan data ke database
  public function create($data){
     return $this->db->insert('user', $data);
}
public function update(){
      
}
public function delete(){
      
}
}