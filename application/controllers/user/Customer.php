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
    $this->load->view('user/add_customer');
}

public function addCustomerdetails(){
    print_r($_POST);
    $this->form_validation->set_rules('firstname','First Name','required|alpha');
    $this->form_validation->set_rules('lastname','Last  Name','required|alpha');
    $this->form_validation->set_rules('emailid','Email id','required|valid_email|is_unique[tblusers.emailId]');
    $this->form_validation->set_rules('mobilenumber','Mobile Number','required|numeric|exact_length[10]');
    if($this->form_validation->run()){
        $fname=$this->input->post('firstname');
        $lname=$this->input->post('lastname');
        $emailid=$this->input->post('emailid');
        $mnumber=$this->input->post('mobilenumber');
        $this->load->model('Customer_Model');
        $this->Customer_Model->addcustomerdetails($fname,$lname,$emailid,$mnumber);
        $this->load->view('user/add_customer');
    }
    else{
        echo ("Failure");
        $this->load->view('user/add_customer');
    }
 
}



}
