<?php
defined('BASEPATH') OR exit('No direct script accsess allowed');
class Barang extends CI_Controller{

	public function __construct(){
		parent:: __construct();

        $this->load->model('Barang_model');
	}
    public function index(){

        $data['judul']='Barang';
        $data['content']='content_admin/v_barang';
        $data['isi_tabel']= $this->Barang_model->get_all();
        $this->load->view('v_admin',$data);

    }
      public function tambah(){

        $data['judul']='Form Tambah Barang';
        $data['content']='content_admin/v_barang_add';
        $this->load->view('v_admin',$data);

    }
    public function tes(){
        $data=$this->Barang_model->get_all();
        print_r($data);
    }
}