<?php
defined('BASEPATH') OR exit('No direct script accsess allowed');
class User extends CI_Controller{
  
    public function __construct(){
		parent:: __construct();

        $this->load->model('User_model');
	}
    public function index(){

        $data['judul']='User';
        $data['content']='content_admin/v_user';
        $data['isi_tabel']= $this->User_model->get_all();
        $this->load->view('v_admin',$data);

    }
      public function tambah(){

        $data['judul']='Form Tambah User';
        $data['content']='content_admin/v_user_add';
        $this->load->view('v_admin',$data);

    }
       public function store(){
		$data=array(
		'nama' =>$this->input->post('nama'),
		'username' =>$this->input->post('username'),
		'password' =>$this->input->post('password'),
		'email' =>$this->input->post('email'),
		'alamat' =>$this->input->post('alamat'),
		'role' =>$this->input->post('role')
		);
 	   $this->User_model->create($data);
 	   redirect('user','refresh');
    }
}