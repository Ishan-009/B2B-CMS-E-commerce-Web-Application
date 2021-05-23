<?php

class Admin_model extends CI_Model{

	public function getbyUsername($username)
	{
		$this->db->where('username',$username);

		$admin=	$this->db->get('admins')->row_array();

		return $admin;

	}


	public function addcatdata($formArray)
	{
		$this->db->insert('category',$formArray); // Insert Category
	}

	public function getMaincat() // Sub-category on select of Main Category
	{
		return  $maincat =$this->db->get('category')->result_array();
		
}

public function getSubcat()
{
	return $subcat=$this->db->get('subcategory')->result_array();
}

public function addsubcat($formArray)
{
$this->db->insert('subcategory',$formArray);

}
	public function FetchInquiryData()
	{
		return $this->db->get('a_quotationdata')->result_array();


	}

	public function GetMCat() // Manage Catgory View Section
	{
		return $this->db->get('category')->result_array();
		
	}

	public function EditMcat($id) // Edit MCategory 
	{
		$this->db->where('id',$id);
		return $this->db->get('category')->row_array();
	}

	public function updateCat($id,$formArray)
	{
		$this->db->where('id',$id);
		$this->db->update('category',$formArray);
		return true;
	}

	public function DelMcategory($Cid)
	{
		$this->db->where('id',$Cid);
		$this->db->delete('category');
		return true;

	}

	public function GetSCategory()
	{
		return $this->db->get('subcategory')->result_array();
	}

	public function EditScat($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('subcategory')->row_array();

	}

	public function updateSCat($id,$formArray)
	{
		$this->db->where('id',$id);
		$this->db->update('subcategory',$formArray);
		return true;
	}

	public function DelScategory($sid)
	{
		$this->db->where('id',$sid);
		if($this->db->delete('subcategory'))
		{
		return true;
		}
		else
		{
			return false;
		}

	}

public function getBimage()
{
	return $this->db->get('bannerimage')->result_array();
	


}

public function AddBimage($formArray)
{
	$this->db->insert('bannerimage',$formArray);
}

public function DelBImage($id)
{
	$this->db->where('id',$id);
	if($this->db->delete('bannerimage'))
	{
	return true;
	}
	else
	{
		return false;
	}

}
public function EBimage($id)
{
	$this->db->where('id',$id);
return 	$this->db->get('bannerimage')->row_array();
}

public function updateBimage($id, $formArray)
{
	$this->db->where('id',$id);
$this->db->update('bannerimage',$formArray);
}

public function getBIdata()
{
	return $this->db->get('bannerimage')->result_array();

}

public function getlogo()
{
	return $this->db->get('logo')->result_array();
}

public function addLogo($formArray)
{
	$this->db->insert('logo',$formArray);
}

public function elogo($id) // get logo table data
{
	$this->db->where('id',$id);
	return $this->db->get('logo')->row_array();
}
public function Ulogo($id,$formArray)
{
	$this->db->where('id',$id);
	$this->db->update('logo',$formArray);
}

public function Dlogo($id)
{
	$this->db->where('id',$id);
	if($this->db->delete('logo'))
	{
	return true;
	}
	else
	{
		return false;
	}

}

public function getMenuM()// Manage Menu
{
	return $this->db->get('mmenu')->result_array();
}

public function AddMenu($formArray)
{
	$this->db->insert('mmenu',$formArray);
}

public function Emenu($id)
{
	$this->db->where('Mid',$id);
	return $this->db->get('mmenu')->row_array();
}

public function Umenu($id,$formArray)
{
	$this->db->where('Mid',$id);
	$this->db->update('mmenu',$formArray);
}

public function deleteM($id)
{
	$this->db->where('Mid',$id);
	if($this->db->delete('mmenu'))
	{
	return true;
	}
	else
	{
		return false;
	}
	
}

public function getSubMdata()
{
	return $this->db->get('submenu')->result_array();


}
public function getMMdata()
{
	return $this->db->get('mmenu')->result_array();


}
public function AddSmenu($formArray)
{
	$this->db->insert('submenu',$formArray);


}

public function ESmmenu($id)
{
	$this->db->where('Sid',$id);
	return $this->db->get('submenu')->row_array();
}
public function updateSmenu($id,$formArray)
{
	$this->db->where('Sid',$id);
	$this->db->update('submenu',$formArray);
}
public function Dsubmenu($id)
{
	$this->db->where('Sid',$id);
	
	if($this->db->delete('submenu'))
	{
	return true;
	}
	else
	{
		return false;
	}
}

public function UInfo()
{
	return 	$this->db->get('user_i')->result_array();
}

public function AddUinfo($formArray)
{
	$this->db->insert('user_i',$formArray);
}

public function EUinfo($id)
{
	$this->db->where('id',$id);
	return $this->db->get('user_i')->row_array();

}

public function updateInfo($id,$formArray)
{
	$this->db->where('id',$id);
	$this->db->update('user_i',$formArray);

}

public function deleteInfo($id)
{
	$this->db->where('id',$id);

	if($this->db->delete('User_i'))
	{
	return true;
	}
	else
	{
		return false;
	}

}

public function DelUInquiry($id)
{
	$this->db->where('id',$id);

	if($this->db->delete(' a_quotationdata')){
		return true;

	}
	else
	{
		return false;
	}
}

}

?>
