<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Customer extends CI_Controller {
function __construct(){
parent::__construct();
if(! $this->session->userdata('uid'))
redirect('user/login');
}
public function index(){
    $this->load->model('Customer_Model');
    $user=$this->Customer_Model->getcustomerdetails();
    $this->load->view('user/customer',['userdetails'=>$user]);
}

public function addCustomer(){
    
    //$this->load->model('Customer_Model');
    $this->load->view('user/add_customer');
}

}
