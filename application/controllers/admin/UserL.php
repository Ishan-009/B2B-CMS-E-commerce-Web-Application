<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserL extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$admin=$this->session->userdata('admin');
		if(empty($admin))
		{
			$this->session->set_flashdata('msg','Your Session is Expired Please Sign in Again ');
			redirect(base_url().'admin/login/index');
		}
		
	}
	
	public function index()
	{
		$this->load->model('Admin_model');
		$data['bImage']=$this->Admin_model->getBimage();
		$this->load->view('admin/M_BImage',$data);
	}

	public function AddBImage()
	{
	
		$this->form_validation->set_rules('name','Image Name ','required');
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
				redirect(base_url().'admin/UserL/AddBImage');
	
	
			}
	
			
	
			$formArray= array(
				'name'=>$this->input->post('name'),
				'B_image'=>$sub_img
			);
			
	
				$this->Admin_model-> AddBimage($formArray);
				$this->session->set_flashdata('Subcat','Image Added Successfully');
				redirect(base_url().'admin/UserL/AddBImage');
	
	
		}
		else
		{
			$this->load->view('admin/ABimage');
		}
		


	}

	public function delBimage($id)
	{	
		$data=$this->Admin_model->DelBImage($id);
		if($data==true)
		{
			$this->session->set_flashdata('del','Image Deleted Successfully ');
			redirect(base_url().'admin/UserL/index');
		}
	}

		public function editBimage($id)
		{
			$this->load->model('Admin_model');
			$data['BIdata']=$this->Admin_model-> EBimage($id);
			$this->load->view('admin/editB_image.php',$data);
			
		}

		public function updateBimage()
		{
			$this->form_validation->set_rules('name','Image Name ','required');
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
					redirect(base_url().'admin/UserL/editBimage/'.$this->input->post('id'));
		
		
				}
		
				
		
				$formArray= array(
					'name'=>$this->input->post('name'),
					'B_image'=>$sub_img
				);
				
					$id=$this->input->post('id');
					$this->Admin_model->updateBimage($id,$formArray);
					$this->session->set_flashdata('Subcat','Image Updated Successfully');
					redirect(base_url().'admin/UserL/editBimage/'.$this->input->post('id'));
		
		
			}
		}

		public function logo() // user side logo
		{
			$data['logod']=$this->Admin_model->getlogo();
			$this->load->view('admin/M_logo',$data);
		}

		public function addLogo()
		{
			$this->form_validation->set_rules('name','Image Name ','required');
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
				redirect(base_url().'admin/UserL/addlogo');
	
	
			}
	
			
	
			$formArray= array(
				'name'=>$this->input->post('name'),
				'image'=>$sub_img
			);
			
	
				$this->Admin_model->addLogo($formArray);
				$this->session->set_flashdata('Subcat','Image Added Successfully');
				redirect(base_url().'admin/UserL/addlogo');
	
	
		}

		else{

			$this->load->view('admin/addlogo');
		}

		}

		public function editLogo($id)
		{
			$this->load->model('Admin_model');
			$data['logo']= $this->Admin_model->elogo($id);
			$this->load->view('admin/editlogo',$data);
		}

	public function updatelogo()
	{
		$this->form_validation->set_rules('name','Image Name ','required');
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
				redirect(base_url().'admin/UserL/editLogo/'.$this->input->post('id'));
			}
	
			
	
			$formArray= array(
				'name'=>$this->input->post('name'),
				'image'=>$sub_img
			);
			
				$id=$this->input->post('id');
				$this->Admin_model->Ulogo($id,$formArray);
				$this->session->set_flashdata('Subcat','Image Updated Successfully');
				redirect(base_url().'admin/UserL/editLogo/'.$id);
	
	
		}
	}
	public function deletelogo($id)
	{ $this->load->model('Admin_model');
		$data= $this->Admin_model->Dlogo($id);
		if($data==true)
		{
			$this->session->set_flashdata('del','Image Deleted Successfully ');
			redirect(base_url().'admin/UserL/logo');
		}

	}

	public function MUmenu() // MAnage USer Menu
	{
	  	$data['menu']=$this->Admin_model->getMenuM();
		  $this->load->view('admin/Mamenu',$data);
	}

	public function addmenu()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('menu','main menu','required');
		if($this->form_validation->run()==true)
		{
			$formArray= array(
				'Mname'=>$this->input->post('menu')
			);
			$this->Admin_model->AddMenu($formArray);
			$this->session->set_flashdata('menu','Menu Added Successfully');
			redirect(base_url().'admin/UserL/addmenu');
		}
		else
		{

		$this->load->view('admin/Amenu');
		}
	}

	public function editmenu($id)
	{
		
		$data['menu']=$this->Admin_model->Emenu($id);
		$this->load->view('admin/editM',$data);
	}

	public function updateM()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('menu','main menu','required');
		if($this->form_validation->run()==true)
		{
			$formArray= array(
				'Mname'=>$this->input->post('menu')
			);
			$id=$this->input->post('id');
			$this->Admin_model-> Umenu($id,$formArray);
			$this->session->set_flashdata('menu','Menu Updated Successfully');
			redirect(base_url().'admin/UserL/editmenu/'.$id);
		}

	}

	public function Mdelete($id)
	{
			$data=$this->Admin_model->deleteM($id);
			if($data==true)
		{
			$this->session->set_flashdata('del','Menu Deleted Successfully ');
			redirect(base_url().'admin/UserL/MUmenu');
		}
	}

	public function Msubmenu()
	{
		$data['smenu']=$this->Admin_model->getSubMdata();
		$this->load->view('admin/MSubmenu',$data);
	}

	public function Addsubmenu()
	{
		$this->load->model('Admin_model');
	$maincat=$this->Admin_model->getMaincat();
	$cat = array();
	$cat['data']= $maincat;

	$this->form_validation->Set_rules('MainCategory01','Main Category','required');
	$this->form_validation->Set_rules('submenu','Sub-Menu','required');
	if($this->form_validation->run()==true)
	{
		

		

		$formArray= array(
			'Sname'=> $this->input->post('submenu'),
			'Mmenu' =>  $this->input->post('MainCategory01'),
		
		);
		

			$this->Admin_model->AddSmenu($formArray);
			$this->session->set_flashdata('Subcat','Sub-menu Added  Succesfully');
			redirect(base_url().'admin/UserL/Addsubmenu');


	}
		$data['Mmenu']=$this->Admin_model->getMMdata();
		$this->load->view('admin/Asubmenu',$data);
	}

	public function editSmenu($id)

	{
		$data['Mmenu']=$this->Admin_model->getMMdata();
		$data['Smenu']=$this->Admin_model->ESmmenu($id);
		$this->load->view('admin/editSubmenu',$data);
	}

	public function UpdateSmenu()
	{
		$this->load->model('Admin_model');
	$this->load->library('form_validation');
	$this->form_validation->set_rules('name','Sub-Category','required');
	if($this->form_validation->run()==true)
	{
	
	
		$formArray=array(
			"Sname"=>$this->input->post('name'),
			"Mmenu"=>$this->input->post('MainCategory01')
	
	
		);
		$id=$this->input->post('id');
		$this->Admin_model->UpdateSmenu($id,$formArray);
		$this->session->set_flashdata('ScategoryU','The SUb-Menu Has Been Updated Successfully');
		redirect(base_url().'admin/UserL/editSmenu/'.$this->input->post('id'));
	
	
	
	}
	else
	{
		redirect(base_url().'admin/UserL/editSmenu/'.$this->input->post('id'));
	}
	}

	public function DSmenu($id)
	{
		$data=$this->Admin_model->Dsubmenu($id);
			if($data==true)
		{
			$this->session->set_flashdata('delS','Sub-Menu deleted Successfully ');
			redirect(base_url().'admin/UserL/Msubmenu');
		}

	}

	public function m_info()
	{
		$data['uinfo']=$this->Admin_model->UInfo();
		$this->load->view('admin/M_info',$data);

	}

	public function au_info()
	{	$this->load->library('form_validation');
		$this->form_validation->set_rules('aboutus','Enter Your About Us Section','required');
		$this->form_validation->set_rules('contactus','Enter Your Contact US Section ','required');
		if($this->form_validation->run()==true)
		{
			$formArray=array(
				"about"=>$this->input->post('aboutus'),
				"contact"=>$this->input->post('contactus')


			);
			$this->Admin_model->AddUinfo($formArray);
			$this->session->set_flashdata('Ainfo','The Information is added successflully.');
			redirect(base_url().'admin/UserL/au_info');


		}

		$this->load->view('admin/AUinfo.php');
	}

	public function eu_info($id)
	{
		$data['info']=$this->Admin_model->EUinfo($id);
		$this->load->view('admin/EUinfo',$data);

	}

	public function ui_user()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('aboutus','Enter Your About Us Section','required');
		$this->form_validation->set_rules('contactus','Enter Your Contact US Section ','required');
		if($this->form_validation->run()==true)
		{
			$id=$this->input->post('id');
			$formArray=array(
				"about"=>$this->input->post('aboutus'),
				"contact"=>$this->input->post('contactus')


			);
			$this->Admin_model->updateInfo($id,$formArray);
			$this->session->set_flashdata('Uinfo','The Information is Updated successflully.');
			redirect(base_url().'admin/UserL/eu_info/'.$id);

	}
	else
	{
		redirect(base_url().'admin/UserL/eu_info/'.$this->input->post('id'));
	}

	
	}

	public function delInfo($id)
	{
		$data=$this->Admin_model-> deleteInfo($id);
		if($data==true)
		{
			$this->session->set_flashdata('delI','Informtion  deleted Successfully ');
			redirect(base_url().'admin/UserL/m_info');
		}
	}
}

