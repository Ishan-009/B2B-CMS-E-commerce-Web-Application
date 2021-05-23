<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inquiry extends CI_Controller {


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
		$this->load->model('Admin_model');
	$data['Inquiry']=$this->Admin_model->FetchInquiryData();
		$this->load->view('admin/U_Inquiry',$data);
	
	}

	public function delUinquiry($id)
	{
		$this->load->model('Admin_model');
		$data=$this->Admin_model->DelUInquiry($id);
		if($data==true)
		{
			$this->session->set_flashdata('delUI',' User Quotation Inquiry  deleted Successfully ');
			redirect(base_url().'admin/inquiry/index');
		}

	}
}
