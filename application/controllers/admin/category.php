<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $admin = $this->session->userdata('admin');
        
        if (empty($admin)) {
            $this->session->set_flashdata('msg','Your session has been expired');
            redirect(base_url().'admin/login/index');
        }
    }
public function index()
{
	$this->load->view('admin/addcat');
}

public function subcategory()
{
	
	$this->load->model('Admin_model');
	$maincat=$this->Admin_model->getMaincat();
	$cat = array();
	$cat['data']= $maincat;
	$this->load->view('admin/subcat',$cat);
}

	public function addcategory()
	{
		
		$this->load->view('admin/addcat');
		$this->load->library('form_validation');

	}


		public function AddCat()
	{
	$this->load->library('form_validation');
	$this->form_validation->set_rules('category','Category','required');
	if($this->form_validation->run()==true)
	{
		if(!empty($_FILES['profile_img']['name'])){
			$config['upload_path'] = 'uploads/images/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = $_FILES['profile_img']['name'];
			
			//Load upload library and initialize here configuration
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			
			if($this->upload->do_upload('profile_img')){
				$uploadData = $this->upload->data();
				$profile_img = $uploadData['file_name'];
			}else{
				$profile_img = '';
			}
		}else{
			$profile_img = '';
		}
		
		if(empty($_FILES['profile_img']['name'])){
			$this->session->set_flashdata('Image01', ' Please Select Image To Proceed');
			redirect(base_url().'admin/category/addcategory');


		}

		

		$formArray= array(
			'name'=> $this->input->post('category'),
			'image'=>$profile_img
		);
		

		$this->Admin_model->addcatdata($formArray);
		$this->session->set_flashdata('category','The Main Category Has Been Added Successfully');
		redirect(base_url().'admin/category/addcategory');
	}
	else

	{
      $this->load->view('admin/addcat');

	}
	
}

public function addsubcategory()
{
	$this->load->model('Admin_model');
	$maincat=$this->Admin_model->getMaincat();
	$cat = array();
	$cat['data']= $maincat;

	$this->form_validation->Set_rules('MainCategory01','Main Category','required');
	$this->form_validation->Set_rules('subcategory','Sub-Category','required');
	if($this->form_validation->run()==true)
	{
		if(!empty($_FILES['sub_img']['name'])){
			$config['upload_path'] = 'uploads/images/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = $_FILES['sub_img']['name'];
			
			//Load upload library and initialize here configuration
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			
			if($this->upload->do_upload('sub_img')){
				$uploadData = $this->upload->data();
				$sub_img = $uploadData['file_name'];
			}else{
				$sub_img = '';
			}
		}else{
			$sub_img = '';
		}
		
		if(empty($_FILES['sub_img']['name'])){
			$this->session->set_flashdata('Image01', ' Please Select Image To Proceed');
			redirect(base_url().'admin/category/addsubcategory');


		}

		

		$formArray= array(
			'name'=> $this->input->post('subcategory'),
			'categoryid' =>  $this->input->post('MainCategory01'),
			'image'=>$sub_img
		);
		

			$this->Admin_model->addsubcat($formArray);
			$this->session->set_flashdata('Subcat','Sub-category Added  Succesfully');
			redirect(base_url().'admin/category/subcategory');


	}
	else
	{
		$this->load->view('admin/subcat',$cat);
	}

}

public function MCategory()
{
	$this->load->model('Admin_model');
	$data['Mcat']=$this->Admin_model->GetMCat();
	$this->load->view('admin/Mcat',$data);
}

public function EditCategory($id)
{
	$this->load->model('Admin_model');
$data['cat']=$this->Admin_model-> EditMcat($id);
	$this->load->view('admin/EditMcat',$data);

	
}

public function UpdateCat()
{
	$this->load->model('Admin_model');
	$this->load->library('form_validation');
	$this->form_validation->set_rules('name','Category','required');
if($this->form_validation->run()==true)
{
	if(!empty($_FILES['profile_img']['name'])){
		$config['upload_path'] = 'uploads/images/';
		$config['allowed_types'] = 'jpg|jpeg|png|gif';
		$config['file_name'] = $_FILES['profile_img']['name'];
		
		//Load upload library and initialize here configuration
		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		
		if($this->upload->do_upload('profile_img')){
			$uploadData = $this->upload->data();
			$profile_img = $uploadData['file_name'];
		}else{
			$profile_img = '';
		}
	}else{
		$profile_img = '';
	}
	
	if(empty($_FILES['profile_img']['name'])){
		$this->session->set_flashdata('Image01', ' Please Select Image To Proceed');
		redirect(base_url().'admin/category/EditCategory/'.$this->input->post('id'));


	}

	$formArray=array(
		"name"=>$this->input->post('name'),
		"image"=>$profile_img


	);
	$Catid=$this->input->post('id');
	$this->Admin_model->updateCat($Catid,$formArray);
	$this->session->set_flashdata('categoryU','The Main Category Has Been Updated Successfully');
	redirect(base_url().'admin/category/EditCategory/'.$this->input->post('id'));



}
else
{
	redirect(base_url().'admin/category/EditCategory/'.$this->input->post('id'));
}

	


}

public function DelMCat($id)
{
	$this->load->model('Admin_model');
	$Cdata=$this->Admin_model->DelMcategory($id);
	if($Cdata==true)
	{
		$this->session->set_flashdata('DelCat','The Main Category Has Been Deleted Successfully');
		redirect(base_url().'admin/category/MCategory');
	}
	else
	{
		$this->session->set_flashdata('DelCats','The Main Category Has Been Deleted Successfully');
		redirect(base_url().'admin/category/MCategory');
	}


}

public function Msubcategory()
{
	$this->load->model('Admin_model');
	$data['Subcat']=$this->Admin_model->GetSCategory();
	$this->load->view('admin/Msubcat',$data);




}

public function EditSubcategory($id)
{
	$this->load->model('Admin_model');
	$data['Subcat']=$this->Admin_model->EditScat($id);
	$this->load->view('admin/EditSubCat',$data);

}

public function UpdateSubcat()
{
	$this->load->model('Admin_model');
	$this->load->library('form_validation');
	$this->form_validation->set_rules('name','Sub-Category','required');
	if($this->form_validation->run()==true)
	{
		if(!empty($_FILES['profile_img']['name'])){
			$config['upload_path'] = 'uploads/images/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['file_name'] = $_FILES['profile_img']['name'];
			
			//Load upload library and initialize here configuration
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			
			if($this->upload->do_upload('profile_img')){
				$uploadData = $this->upload->data();
				$profile_img = $uploadData['file_name'];
			}else{
				$profile_img = '';
			}
		}else{
			$profile_img = '';
		}
		
		if(empty($_FILES['profile_img']['name'])){
			$this->session->set_flashdata('Image01', ' Please Select Image To Proceed');
			redirect(base_url().'admin/category/EditSubcategory/'.$this->input->post('id'));
	
	
		}
	
		$formArray=array(
			"name"=>$this->input->post('name'),
			"image"=>$profile_img
	
	
		);
		$Catid=$this->input->post('id');
		$this->Admin_model->updateSCat($Catid,$formArray);
		$this->session->set_flashdata('ScategoryU','The SUb-Category Has Been Updated Successfully');
		redirect(base_url().'admin/category/EditSubcategory/'.$this->input->post('id'));
	
	
	
	}
	else
	{
		redirect(base_url().'admin/category/EditSubcategory/'.$this->input->post('id'));
	}
	


}

public function DelSubCat($sid)
{
	$this->load->model('Admin_model');
	$Cdata=$this->Admin_model-> DelScategory($sid);
	if($Cdata==true)
	{
		$this->session->set_flashdata('DelSCat','The SUb Category Has Been Deleted Successfully');
		redirect(base_url().'admin/category/Msubcategory');
	}
	else
	{
		$this->session->set_flashdata('DelSCat1','The SUb Category Has Not Been Deleted Successfully');
		redirect(base_url().'admin/category/Msubcategory');
	}
}



}


?>


