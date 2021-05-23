<?php

class Product_model extends CI_Model{


	public function upload($formArray) //Add Product Admin Side

	{
		$this->db->insert('product',$formArray);
		return true;

	}

	public function getProductdata() // product Data
	{

		return $Product=$this->db->get('product')->result_array();

	}

	public function getprod($prodid)// edit 
	{
			$this->db->where('id',$prodid);
			return $product = $this->db->get('product')->row_array();

	}

	public function updateProd($Productid,$formArray) // Update Product Admin Side
	{
		$this->db->where('id',$Productid);
		$this->db->update('product',$formArray);
		return true;
	}

	public function deleteProd($Productid) // delete Product admin side
	{
		$this->db->where('id',$Productid);
		$this->db->delete('product');
	}

	public function getProdDetails($Pid) // fetching Product details as Per id
	{
		$this->db->where('id',$Pid);
		return $this->db->get('product')->result_array();
	}


	public function getProductRow($id)  //Add to Cart Implementation 
	{
		$this->db->where('id',$id);
		$query= $this->db->get('product')->row_array();
		return $query;
		

	}

	public function getSubcategory($cid)
	{
		$this->db->where('categoryid',$cid);
		return $this->db->get('subcategory')->result_array();
		

	}

	public function getProdSubCat($subName) // Get Products According to SUbCategory
	{
		$str = str_replace("-", " ", $subName);
		$this->db->where('subcategory',$str);
		return $this->db->get('product')->result_array();

	}

	public function getProdMainCat($CatName) // Get Products According to MainCategory, change 
	{
		$this->db->where('category',$CatName);
		return $this->db->get('product')->result_array();

	}
	
	public function ProductRow($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('product')->row_array();
	}
	

}
?>
