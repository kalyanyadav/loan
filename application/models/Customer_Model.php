<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
Class Customer_Model extends CI_Model{

	public function getcustomerdetails(){
		$query=$this->db->select('*')
		              ->get('tbl_customer');
		        return $query->result();      
	}

	public function addcustomerdetails($fname,$lname,$emailid,$mnumber){
		$data=array(
					'first_name'=>$fname,
					'last_name'=>$lname,
					'email'=>$emailid,
					'mobileNumber'=>$mnumber
				);
		$sql_query=$this->db->insert('tbl_customer',$data);
		if($sql_query){
		$this->session->set_flashdata('success', 'Registration successfull');
				redirect('user/customer/addCustomer');
			}
			else{
				$this->session->set_flashdata('error', 'Somthing went worng. Error!!');
				redirect('user/customer/addCustomer');
			}
		
			}



}?>