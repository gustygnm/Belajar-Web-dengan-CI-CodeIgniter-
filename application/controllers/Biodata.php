<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {
	public function index()
	{
		echo "hayyy";
	}
	public function data($nama='',$alamat='',$status){
	echo "Perkenalkan Nama saya : $nama \n Saya tinggal di $alamat \n Status : $status";

	}

	public function tampil(){
		$data['nama']="Gusti Ngurah Mertayasa";
		$data['nim']="1510530089";
		$data['kelas']="B";
		$data['semester']="VI";
		$this->load->view('v_biodata',$data);
	}
}
