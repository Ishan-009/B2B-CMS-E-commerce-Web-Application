<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url','form');
		$this->load->model('Product_model');
		$this->load->helper('common_helper');

		$admin=$this->session->userdata('admin');
		if(empty($admin))
		{
			$this->session->set_flashdata('msg','Your Session is Expired Please Sign in Again ');
			redirect(base_url().'admin/login/index');
		}
		
	}



	public function index()
	{
			
			$ProductData['prod']=$this->Product_model->getProductdata();
			$this->load->view('admin/viewProduct',$ProductData);
			

	}
	public function addProduct()
	{

		$this->form_validation->set_rules('name','Product Name','required');
			$this->form_validation->set_rules('MainCategory01','Product Category','required');
			$this->form_validation->set_rules('SubCategory01','Product Name','required');
		if($this->form_validation->run())
		{

			
    

			
            
            //Check whether Member upload profile_img
            if(!empty($_FILES['profile_img']['name'])){
				$this->load->library('upload');
				$dataInfo = array();
				$profiles = $_FILES;
				$cpt = count($_FILES['profile_img']['name']);
				for($i=0; $i<$cpt; $i++)
				{           
					$_FILES['profile_img']['name']= $profiles['profile_img']['name'][$i];
					$_FILES['profile_img']['type']= $profiles['profile_img']['type'][$i];
					$_FILES['profile_img']['tmp_name']= $profiles['profile_img']['tmp_name'][$i];
					$_FILES['profile_img']['error']= $profiles['profile_img']['error'][$i];
					$_FILES['profile_img']['size']= $profiles['profile_img']['size'][$i];    
			
					$this->upload->initialize($this->set_upload_options());
					$this->upload->do_upload();
					$dataInfo[] = $this->upload->data();
				}
				
			}
			if(empty($_FILES['profile_img']['name'])){
				$this->session->set_flashdata('Image01', ' Please Select Atleast one  Image To Proceed');
				redirect(base_url().'admin/product/addProduct');


			}

			

				
            //Prepare array of Member data
            $ProductData = array(
                'name' => $this->input->post('name'),
				'category' => $this->input->post('MainCategory01'),
				'subcategory' => $this->input->post('SubCategory01'),
				'description' => $this->input->post('desc'),
				'image' => $dataInfo[0]['file_name'],
       			 'image1' => $dataInfo[1]['file_name'],
				'image2' => $dataInfo[2]['file_name'],
				'image3' => $dataInfo[3]['file_name'],
				'status'=>$this->input->post('stock')
            );
            
            //Pass Member data to model
			$productdata = $this->Product_model->upload($ProductData);
		
				
			
            //Storing insertion status message.
            if($productdata==true){
				
				$this->session->set_flashdata('success_msg', ' Product is Added  successfully.');
				redirect(base_url().'admin/product/addProduct');
			}
			else{

				$ProductData = array(
					'name' => $this->input->post('name'),
					'category' => $this->input->post('MainCategory01'),
					'subcategory' => $this->input->post('SubCategory01'),
					'description' => $this->input->post('desc'),
					'image' => $dataInfo[0]['file_name'],
					'status'=>$this->input->post('stock')
					
				);
				
				//Pass Member data to model
			
			$productdata = $this->Product_model->upload($ProductData);
			$this->session->set_flashdata('Error1', 'Product With Single Image IS Added Successfully');
			redirect(base_url().'admin/product/addProduct');
	
				
			}
		
		}

		//Form for adding Member data
		$data['subcat']=$this->Admin_model->getSubcat();
		$data['maincat']=$this->Admin_model->getMaincat();
	
		$this->load->view('admin/addproduct',$data);
        
	}
		public function editProd ($Prodid)
	{

	$this->load->model('Product_model');
	$data['product']=$this->Product_model->getprod($Prodid);
	$data['subcat']=$this->Admin_model->getSubcat();
		$data['maincat']=$this->Admin_model->getMaincat();
	$this->load->view('admin/editprod',$data);

	


	}


	public function update()
	{
		$this->form_validation->set_rules('name','Product Name','required');
		$this->form_validation->set_rules('MainCategory01','Product Category','required');
		$this->form_validation->set_rules('SubCategory01','Product Name','required');
	if($this->form_validation->run())
	{

		


		
		
		//Check whether Member upload profile_img
		if(!empty($_FILES['profile_img']['name'])){
			$this->load->library('upload');
			$dataInfo = array();
			$profiles = $_FILES;
			$cpt = count($_FILES['profile_img']['name']);
			for($i=0; $i<$cpt; $i++)
			{           
				$_FILES['profile_img']['name']= $profiles['profile_img']['name'][$i];
				$_FILES['profile_img']['type']= $profiles['profile_img']['type'][$i];
				$_FILES['profile_img']['tmp_name']= $profiles['profile_img']['tmp_name'][$i];
				$_FILES['profile_img']['error']= $profiles['profile_img']['error'][$i];
				$_FILES['profile_img']['size']= $profiles['profile_img']['size'][$i];    
		
				$this->upload->initialize($this->set_upload_options());
				$this->upload->do_upload();
				$dataInfo[] = $this->upload->data();
			}
			
		}
		if(empty($_FILES['profile_img']['name'])){
			$this->session->set_flashdata('Image01', ' Please Select Atleast one  Image To Proceed');
			redirect(base_url().'admin/product/editProd/'.$this->input->post('id'));


		}

		

			
		//Prepare array of Member data
		$ProductData = array(
			'name' => $this->input->post('name'),
			'category' => $this->input->post('MainCategory01'),
			'subcategory' => $this->input->post('SubCategory01'),
			'description' => $this->input->post('desc'),
			'image' => $dataInfo[0]['file_name'],
				'image1' => $dataInfo[1]['file_name'],
			'image2' => $dataInfo[2]['file_name'],
			'image3' => $dataInfo[3]['file_name'],
			'status'=>$this->input->post('stock')
		);
		
		//Pass Member data to model
		$Productid = $this->input->post('id');
	$productdata = $this->Product_model->updateProd($Productid,$ProductData);
	
	
			
		
		//Storing insertion status message.
		if($productdata==true){
			
			$this->session->set_flashdata('success_msg', ' Product is Updated successfully.');
			redirect(base_url().'admin/product/editProd/'.$Productid);
			
		  
		}
		else{

			$ProductData = array(
				'name' => $this->input->post('name'),
				'category' => $this->input->post('MainCategory01'),
				'subcategory' => $this->input->post('SubCategory01'),
				'description' => $this->input->post('desc'),
				'image' => $dataInfo[0]['file_name'],
				'status'=>$this->input->post('stock')
				
			);
			
			//Pass Member data to model
			$Productid = $this->input->post('id');
		$productdata = $this->Product_model->updateProd($Productid,$ProductData);
		$this->session->set_flashdata('Error1', 'Product With Single Image IS Added Successfully');
		redirect(base_url().'admin/product/editProd/'.$Productid);

			
		}
	
	}

	
	

		
	}


	



	
	public function delete($id)
	{

	$this->load->model('Product_model');
	$del=$this->Product_model->deleteProd($id);	
		$this->session->set_flashdata('deletes', ' Product is Deleted successfully.');	
		redirect(base_url().'admin/product/index');



	}

	private function set_upload_options()
{   
    //upload an image options
    $config = array();
    $config['upload_path'] = 'uploads/images/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']      = '0';
    $config['overwrite']     = FALSE;

    return $config;
}


}
//	$Productid = $this->input->post('id');
				//Pass Member data to model
		//		$productdata = $this->Product_model->updateProd($Productid,$ProductData);
