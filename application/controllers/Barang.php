<?php
defined('BASEPATH') OR exit('No direct script accsess allowed');
class Barang extends CI_Controller{
    public function index(){

        $data['judul']='Barang';
        $data['content']='content_admin/homepage';
        $this->load->view('v_admin',$data);
    }
}