<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Login extends CI_Controller {
	
	public function index()
	{
		
		$this->load->view('user/login');
	}

		public function login()
		{
			$this->load->model('User_model');	
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');

			if($this->form_validation->run()==false)
			{
				$this->load->view('user/login');
			}
			else
			{
				
				$username=$this->input->post('password');
				$password=md5($this->input->post('password'));
				$res=$this->User_model->validate($username,$password);

				if($res==true)
				{
					redirect(base_url().'user/Home/index');


				}

				else
				{
					$this->session->set_flashdata('Login','Username or Password  is Wrong');
					redirect(base_url().'user/User_Login');
			
				

				}




			}



		}


}
