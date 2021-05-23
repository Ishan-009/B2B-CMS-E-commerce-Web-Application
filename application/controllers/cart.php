
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
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
		
		$this->form_validation->set_rules('name','UserName','required');
			$this->form_validation->set_rules('email','User Email','required');
			$this->form_validation->set_rules('Mobile','Mobile Number','required|exact_length[10]');
			$this->form_validation->set_rules('message','Message Required','required');
			
			if($this->form_validation->run())
			{
					//success
					$data=array(
						'username'=>$this->input->post('name'),
						'email'=>$this->input->post('email'),
						'mobile'=>$this->input->post('Mobile'),
						'message'=>$this->input->post('message'),
						'userdata'=>$this->input->post('hide')




					);

				$this->User_model->UploadInquiryData($data);
				// email

				$this->load->library('email');
				$to =  $this->input->post('email');  // User email pass here
				$subject = 'Thank You For Quoting the Product From Our Website ';
				
				$from = 'spotifyhacks573@gmail.com';              // Pass here your mail id
			
			
			
				$emailContent='Your Data quote has been received with us , Check Quoted Data Below :- ';
				
				$emailContent .='<br> <br>';
				
				$emailContent .= $this->input->post('hide');  //   Post message available here
				
			
			
							
			
			
				$config['protocol']    = 'smtp';
				$config['smtp_host']    = 'ssl://smtp.gmail.com';
				$config['smtp_port']    = '465';
				$config['smtp_timeout'] = '60';
			
				$config['smtp_user']    = 'spotifyhacks573@gmail.com';    //Important
				$config['smtp_pass']    = 'ishan09122000';  //Important
			
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
				$this->email->send();

				if($this->email->send()->run())
				{
					$this->session->set_flashdata('cart','Product Quotation Sent Successfully');
				}
			


			




			}
		
			$data = array();
			$data['menu']=$this->Menu_model->getmenu();
			$data['dropdown']=$this->Menu_model->menu_all();
			$data['select']=$this->Menu_model->menu_select();
			$data['logo']=$this->User_model->getlogo();
			$data['category']=$this->User_model->fetchMaincat();
		$data['cartItems']= $this->cart->contents();
		$data['info']=$this->User_model->getInfo();
		$this->load->view('user/cart',$data);
		
		
	}

	function removeItem(){
        // Remove item from cart
	
		$data = array(
			'rowid' => $this->input->post('row_id'),
			'qty' => 0,
			);
			$this->cart->update($data);
			echo $this->show_cart();
       
		 
        
    
    }

	function load_cart(){ 
		echo $this->show_cart();
	}

	function show_cart()
	{
		$output = '';
		$no = 0;
		foreach ($this->cart->contents() as $prodCart) {
			$no++;
			$output .='
				<tr>
				<td class="product-name"><a href="#">'.$prodCart['id'].'</a></td>
				<td class="product-thumbnail">
				<a href="#"><img src="'.base_url().'uploads/images/'.$prodCart['image'].'" alt="" height="100px" width="130px"></a>
			</td>
			<td class="product-name"><a href="#">'.$prodCart['Name'].'</a></td>
			<td class="text-right" style="text-align: right; padding: 1px 10px;font-size: 12px; line-height: 1.5; 
                                    border-radius: 3px;">
                                        <input type="number" name="qty" value="'. $prodCart['qty'].'" id="'.$prodCart['id'].'" maxlength="3" size="1" style="width:50px; border: 1px solid #CCC; border-radius: 3px;text-align: center;height: 35px;" min="0">
                                        <button type="button" data-rowid="'.  $prodCart['rowid'].'" data-productid="'. $prodCart['id'].'" id="'.$prodCart['id'].'" class="update-cart-qty btn btn-success btn-xs"><i class="icon-refresh"></i></button>
                                </td>
			<td style="padding-left: 60px;"><button style="width:min-content;" type="button" data-productid="'. $prodCart['rowid'].'" class="del btn btn-danger btn-block"><i class="fas fa-trash "></i></button></td>

			</td>
			</tr>
		

				
				
				
			
			';
		}
	
		return $output;

	}
	function update() {
        
            $rowid = $this->input->post('row_id');
            $qty = $this->input->post('quantity');
            $data = array(
                'rowid' => $rowid,
                'qty' => $qty
            );
            $this->cart->update($data);

				echo $this->show_cart();
        }


		function cartnum()
		{
			echo $output = count($this->cart->contents());
		return $output;
		}
 
}
