<?php
defined('BASEPATH') OR exit('No direct script accsess allowed');
class Admin extends CI_Controller{
    public function index(){
        $this->load->view('v_admin');
    }
}