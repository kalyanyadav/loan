<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
Class Customer_Model extends CI_Model{

	public function getcustomerdetails(){
		$query=$this->db->select('first_Name,last_Name')
		              ->get('tbl_customer');
		        return $query->result();      
	}

	public function addcustomerdetails($fname,$lname,$emailid,$mnumber){
		$data=array(
					'firstName'=>$fname,
					'lastName'=>$lname,
					'emailId'=>$emailid,
					'mobileNumber'=>$mnumber
				);
		$sql_query=$this->db->insert('tbl_customer',$data);
		if($sql_query){
		$this->session->set_flashdata('success', 'Registration successfull');
				redirect('admin/Add_Users');
			}
			else{
				$this->session->set_flashdata('error', 'Somthing went worng. Error!!');
				redirect('admin/Add_Users');
			}
		
			}



}?>