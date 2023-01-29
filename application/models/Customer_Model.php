<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
Class Customer_Model extends CI_Model{

	public function getcustomerdetails(){
		$query=$this->db->select('first_Name,last_Name')
		              ->get('tbl_customer');
		        return $query->result();      
	}

	

}?>