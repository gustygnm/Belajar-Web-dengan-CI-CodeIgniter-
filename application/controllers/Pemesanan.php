<?php
defined('BASEPATH') OR exit('No direct script accsess allowed');
class Pemesanan extends CI_Controller{
    public function index(){

        $data['judul']='Pemesanan';
        $data['content']='content_admin/homepage';
        $this->load->view('v_admin',$data);
    }
}