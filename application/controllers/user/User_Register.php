<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');


	}


	
	public function index()
	{
		
		$this->load->view('user/register');
	}

	public function register()
	{

		$this->form_validation->set_rules('username','UserName','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('mobile','Mobile','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('check','CheckBox','required');

		if($this->form_validation->run()==false)
		{

			$this->load->view('user/register');
		}

	else
	{
		$logData['username']=$this->input->post('username');
		$logData['password']=md5($this->input->post('password'));
		$this->User_model->logindata($logData);

		$formArray= array(
			'username'=>$this->input->post('username'),
			'email'=> $this->input->post('email'),
			'mobile'=>$this->input->post('mobile'),
			'password'=>md5($this->input->post('password'))

		);
		$this->User_model->register($formArray);
		$this->session->set_flashdata('register','User Register Successfully');
		redirect(base_url().'user/User_Login/index');
	




	}
		
		
	}


}
