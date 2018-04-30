<?php
defined('BASEPATH') OR exit('No direct script accsess allowed');
class User extends CI_Controller{
    public function index(){

        $data['judul']='User';
        $data['content']='content_admin/homepage';
        $this->load->view('v_admin',$data);
    }
}