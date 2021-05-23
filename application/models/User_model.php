<?php

class User_model extends CI_Model{

	public function register($formArray)
	{
		$this->db->insert('user_data',$formArray);
	}

	public function logindata($logData)
	{
		$this->db->insert('user_login',$logData);
	
	}


	public function validate($username,$password){
	
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			$query  =   $this->db->get('user_login');
		
			if ($query->num_rows() > 0) 
			{
				return true;
			}
			 else
			 {
				return false;
			}
		
	  }
	public function UploadInquiryData($prodArray)
	{
		$this->db->insert('a_quotationdata',$prodArray);
		return true;


	}

	
	public function fetchMaincat() // Sub-category on select of Main Category
	{
		return  $maincat =$this->db->get('category')->result_array();
		
}

public function SendUserInquiry($formArray) // User Inquiry
{
	$this->db->insert('u_inquirydata',$formArray);
	return true;
}

   public function getBanner()
   {
	   return $this->db->get('bannerimage')->result_array();

   }

   public function getlogo()
   {
	   $query= $this->db->get('logo')->row();
	   return $query;
   }

public function getInfo()
{
	return $this->db->get('user_i')->row_array();

}


	
	

}
?>
