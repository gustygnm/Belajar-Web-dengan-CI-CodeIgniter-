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
       public function store(){
		$data=array(
		'nama_barang' =>$this->input->post('nama_barang'),
		'deskripsi' =>$this->input->post('deskripsi'),
		'kategori' =>$this->input->post('kategori'),
		'harga' =>$this->input->post('harga'),
		'gambar' =>'image.jpg',
		'status' =>$this->input->post('status')
		);
 	   $this->Barang_model->create($data);
 	   redirect('barang','refresh');
    }
    public function update(){
        $id=$this->input->post('id');
        $data=array(
        'nama_barang' =>$this->input->post('nama_barang'),
        'deskripsi' =>$this->input->post('deskripsi'),
        'kategori' =>$this->input->post('kategori'),
        'harga' =>$this->input->post('harga'),
        'gambar' =>'image.jpg',
        'status' =>$this->input->post('status')
        );
       $this->Barang_model->update($data , $id);
       redirect('barang','refresh');
    }

    public function edit($id='$key'){

        $data['isi_tabel']= $this->Barang_model->get_id($id);
        if (count($data['isi_tabel']) == 0) {
            echo 'Halaman tidak ditemukan';
            return null;
        }
         $data['judul']='Form Edit Barang';
        $data['content']='content_admin/v_barang_edit';
        $this->load->view('v_admin',$data);
    }
}