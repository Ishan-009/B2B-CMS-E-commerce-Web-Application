<?php
error_reporting(0);
defined('BASEPATH') OR exit('No direct script access allowed');

class Phome extends CI_Controller {
	public function __construct(){
        parent::__construct();
	  $this->load->model('Product_model');
	  $this->load->model('User_model');
	  $this->load->model('Menu_model');
		$this->load->helper('url','form');
		$this->load->helper('common_helper');
		$this->load->library('cart');


	}
	
	public function index()
	{
		$prod=$this->Product_model-> getProductdata();
		$prod01['Products']= $prod;
		$prod01['category']=$this->User_model->fetchMaincat();
		$prod01['banner']=$this->User_model->getBanner();
		$prod01['logo']=$this->User_model->getlogo();
		$prod01['dropdown']=$this->Menu_model->menu_all();
		$prod01['select']=$this->Menu_model->menu_select();
		$prod01['menu']=$this->Menu_model->getmenu();
		$prod01['info']=$this->User_model->getInfo();
		$this->load->view('user/home',$prod01);
	

	}
	
		public function SubDetails($id) // Update Change Last Moment Product Page Converting to Sub-Category Page
		// SO, Here we Fetch results With Category Id

		{

		

			$prod01['Products']=$this->Product_model->getProdDetails($id);
			$prod01['category']=$this->User_model->fetchMaincat();
			$prod01['subcategory']=$this->Product_model->getSubcategory($id);
			$prod01['logo']=$this->User_model->getlogo();
			$prod01['dropdown']=$this->Menu_model->menu_all();
			$prod01['select']=$this->Menu_model->menu_select();
			$prod01['menu']=$this->Menu_model->getmenu();
			$prod01['info']=$this->User_model->getInfo();
			$this->load->view('user/subcat',$prod01);
		
		
		}

		public function AddToCart()//Add to Cart

		{

			$id = $this->input->post('product_id');
			$product=$this->Product_model->ProductRow($id);
			
				
				$data= array(
				
					'id'=>$id,
					'qty'=>$this->input->post('quantity'),
					'price'=> 1,
					'name'=>01,
					'Name'=>$product['name'],
					'image'=>$product['image']
			

					);
			$this->cart->insert($data);
		  //$this->session->set_flashdata('cart','Product Has been Added To the Cart');
					
			 echo $output = count($this->cart->contents());

				return $output;


		}

		public function shopList($cat)// products according to Category
		{
			$this->load->model('Product_model');
			$data['logo']=$this->User_model->getlogo();
			$data['product']=$this->Product_model->getShopList($cat);
			$data['dropdown']=$this->Menu_model->menu_all();
			$data['select']=$this->Menu_model->menu_select();
			$data['menu']=$this->Menu_model->getmenu();
			$data['info']=$this->User_model->getInfo();
			$this->load->view('user/shoplist',$data);

		}

		public function SubProd($subName)// products according to Sub-Category

		{
			$this->load->model('Product_model');
			$data['dropdown']=$this->Menu_model->menu_all();
			$data['select']=$this->Menu_model->menu_select();
			$data['menu']=$this->Menu_model->getmenu();
			$data['Product']=$this->Product_model->getProdSubCat($subName);
			$data['category']=$this->User_model->fetchMaincat();
			$data['logo']=$this->User_model->getlogo();
			$data['info']=$this->User_model->getInfo();
			$this->load->view('user/Subprodlist',$data);
			


		}


		

	/*	public function CustomCat()// Change 
		{
			$cat="AGRICULTURAL WEAR PARTS";
			$this->load->model('Product_model');
			$data['Category']=$this->Product_model->getProdMainCat($cat);
			$data['category']=$this->User_model->fetchMaincat();
			$this->load->view('user/subcat1',$data);
		}
*/
		public function ProdDetail($id)
		{
			$this->load->model('Product_model');
			$prod01['Products']=$this->Product_model->getProdDetails($id);
			$prod01['category']=$this->User_model->fetchMaincat();
			$prod01['logo']=$this->User_model->getlogo();
			$prod01['dropdown']=$this->Menu_model->menu_all();
			$prod01['select']=$this->Menu_model->menu_select();
			$prod01['menu']=$this->Menu_model->getmenu();
			$prod01['info']=$this->User_model->getInfo();
			$this->load->view('user/prodPage',$prod01);
		}

		public function Contact()
		{
			$this->load->model('User_model');
			$this->load->library('form_validation');
			$this->form_validation->set_rules('name','Enter Your Name','required');
			$this->form_validation->set_rules('email','Enter Your Email','required');
			$this->form_validation->set_rules('subject','Enter Your Subject','required');
			$this->form_validation->set_rules('message','Enter Your Message','required');

			if($this->form_validation->run()==true)
			{	
				//success
					$this->load->library('email');
				$to =  'ishmoorjmalani66@gmail.com';  // User email pass here
				$subject = 'User Inquiry ';
				
				$from = 'spotifyhacks573@gmail.com';              // Pass here your mail id
			
			
				$emailContent ='<html> <body>
				<p>UserName:- </p>'.$this->input->post('name').'<br> Email Address:-'.$this->input->post('email').'<br> Subject:-'.$this->input->post('subject').'<br>  <br> Message:-' .$this->input->post('message').'</body></html>';
								
			
			
				$config['protocol']    = 'smtp';
				$config['smtp_host']    = 'ssl://smtp.gmail.com';
				$config['smtp_port']    = '465';
				$config['smtp_timeout'] = '60';
			
				$config['smtp_user']    = 'spotifyhacks573@gmail.com';    //Important
				$config['smtp_pass']    = 'ishan@2000';  //Important
			
				$config['charset']    = 'utf-8';
				$config['newline']    = "\r\n";
				$config['mailtype'] = 'html'; // or html
				$config['validation'] = TRUE; // bool whether to validate email or not 
			
				 
			
				$this->email->initialize($config);
				$this->email->set_mailtype("html");
				$this->email->from($from);
				$this->email->to($to);
				$this->email->subject($subject);
				$this->email->message($emailContent);
				$data=$this->email->send();
				if($data)
				{
					$this->session->set_flashdata('Mail','Inquiry Recieved Succesfully, We will Contact You Shortly');
					redirect(base_url().'user/Phome/Contact');
				}
				else
				{
					$this->session->set_flashdata('MailN','Inquiry Not REceived Properly Please Again After Some Time ');
					redirect(base_url().'user/Phome/Contact');

				}

			




			}
				

			
			else
			{
				$data['dropdown']=$this->Menu_model->menu_all();
				$data['select']=$this->Menu_model->menu_select();
				$data['menu']=$this->Menu_model->getmenu();
				$data['logo']=$this->User_model->getlogo();
				$data['category']=$this->User_model->fetchMaincat();
				$data['info']=$this->User_model->getInfo();
				$this->load->view('user/contact',$data);
			}
		}

		public function AboutUs()
		{
			$data['dropdown']=$this->Menu_model->menu_all();
			$data['select']=$this->Menu_model->menu_select();
			$data['menu']=$this->Menu_model->getmenu();
			$data['logo']=$this->User_model->getlogo();
			$data['category']=$this->User_model->fetchMaincat();
			$data['info']=$this->User_model->getInfo();
			$this->load->view('user/about',$data);
		}

}
