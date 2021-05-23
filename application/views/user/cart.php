<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Shopping Cart</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- all css here -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo public_url() ?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo public_url() ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo public_url() ?>assets/css/animate.css">
        <link rel="stylesheet" href="<?php echo public_url() ?>assets/css/simple-line-icons.css">
        <link rel="stylesheet" href="<?php echo public_url() ?>assets/css/themify-icons.css">
        <link rel="stylesheet" href="<?php echo public_url() ?>assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo public_url() ?>assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="<?php echo public_url() ?>assets/css/style.css">
		<link rel="stylesheet" href="<?php echo public_url() ?>assets/css/responsive.css">
		<link rel="stylesheet" href="<?php echo public_url() ?>admin/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo public_url() ?>admin/plugins/fontawesome-free/css/all.min.css">
		<script src="<?php echo public_url() ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
		<style>
.cart-tax{
	background-color: whitesmoke;

}
.cart-bottom-title{
	text-decoration: black;

}
.form-group-submit{
    padding-left: 385px;
    color:red;

}
#sub01{
    color: whitesmoke;
}

		.mega-menu{
		width: 100px;

	}
	.footer-top{
		color:white;
	}
	.submenu{
		background-color: grey;
	}
	#scrollUp{
		background-color: #0943ff;


	}
	.main-menu li:hover>a{
		color: #0943ff;
	}

	.responsive {
  width: 100%;
  height:auto;
}
#t01{

width: fit-content;
}
.map-responsive{
    overflow:hidden;
    padding-bottom:56.25%;
    position:relative;
    height:0;
}
.map-responsive iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
}


		</style>
    </head>
    <body>
	
       <?php $this->load->view('user/layouts/UserLayout');?>

        <div class="breadcrumb-area pt-95 pb-95 bg-img" style="background-color: black;"> 
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>Request A Quote</h2>
                    <ul>
                        <li><a href="<?php echo base_url().'user/Phome/index'?>">home</a></li>
                        <li class="active">Cart Page</li>
                    </ul>
                </div>
            </div>
		</div>
         
        <div class="cart-main-area pt-95 pb-100">
            <div class="container">
			<div id="successmsg"  align="center"style="color: white" class="bg-danger" style="width: auto;">
	
</div>
<div id="successUmsg" align="center"  style="color:white " class="bg-success" style="width: auto;">
	
</div>
<br>
<br>
<?php if($this->session->flashdata('delUI')):?>
	<div align ="center" style="color: red" class="bg-danger" style="width: 100%;">
	<?php echo $this->session->flashdata('delUI');?>
</div>
<?php endif;?>
<br>
<br>
          <h3 class="page-title">Your cart items</h3>
                <div class="row">
                    <div class="col-lg-10 col-md-12 col-sm-12 col-12" >
                        <form action="#">
                            <div class="table-content table-responsive center table-striped " id="t01">
                                <table >
                                    <thead style="background-color:#3333ff">
                                        <tr>
										<th style="color: whitesmoke;">Product Id</th>
                                            <th style="color: whitesmoke;">Image</th>
                                            <th style="color: whitesmoke;">Product Name</th>
											<th style="color: whitesmoke;">Quantity</th>
                                            <th style="color: whitesmoke;">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody id="Ucart">
									
		
									<?php	foreach($cartItems as $prodCart):?>
								
                                      <tr>
										<td class="product-name "><a href="#"><?php echo $prodCart['id'];?></a></td>
                                            <td class="product-thumbnail">
                                                <a href=""><img src="<?php echo base_url().'uploads/images/'.$prodCart['image'];?>" alt="" height="100px" width="130px"></a>
                                            </td>
                                            <td class="product-name"><a href="#"><?php echo $prodCart['Name'];?></a></td>
											<td class="text-right" style="text-align: right; padding: 1px 10px;font-size: 12px; line-height: 1.5; 
                                    border-radius: 3px;">
                                        <input type="number" name="qty" value="<?php print $prodCart['qty']; ?>" id="<?php print $prodCart['id'];?>" maxlength="3" size="1" style="width:50px; border: 1px solid #CCC; border-radius: 3px;text-align: center;height: 35px;" min="0">
                                        <button type="button" data-rowid="<?php print $prodCart['rowid'];?>" data-productid="<?php print $prodCart['id'];?>"  class="update-cart-qty btn btn-success btn-xs"><i class="icon-refresh"></i></button>
                                </td>
										 <td style="padding-left: 60px;"><button style="width: min-content;" type="button" data-productid="<?php echo $prodCart['rowid'];?>" class="del btn btn-danger btn-block"><i class="fas fa-trash "></i></button></td>
										</tr>
								
                                      <?php endforeach;?>
									
                                    </tbody>
                                </table>
                            </div>

                        </form>
                        
                        <br>
                        <br>

                    
									<div class="form-class" >
                                         <form action="<?php echo base_url();?>cart/" method="post" >
										
										 <div class="form-group">
										 <label for="Name" style="text-align: center;"><strong>Name</strong></label>	 
										 <br>
										<input type="textbox" name="name"  placeholder="Enter your Name"style="width:100%">
										</div>
										
									<?php echo form_error('name');?>
										<div class="form-group" >
										<label for="email"><strong>Email Address</strong></label>
										<br>
										<input type="text" name="email" class="form-control" placeholder="Enter your Email" style="width: 100%;" >
										
										</div>
										
									<?php echo form_error('email');?>
										<div class="form-group" >
	                            <label for="Mobile NUmber " class="styleL"><strong>Mobile Number</strong>  </label></strong>	
										<br>
										<input type="number" name="Mobile" class="form-control" placeholder="Enter your Mobile Number" style="width:100%;">
										
										</div>
										<?php echo form_error('Mobile');?>
											<div class="form-group">
                     					   <label><strong>Message</strong> </label>
                      				  <textarea class="text-area form-control" rows="3" id="message" name="message" > <?php echo set_value('message');?>	</textarea>
                     						 </div>
											  <?php echo form_error('message');?>

										<div class="form-group">
					
										<textarea class="text-area form-control" rows="3" id="hide01" name="hide"  style="display: none;"> <?php echo set_value('hide');?>  
										
									<?php
								
								foreach($cartItems as $prodCart)
								{
									echo 'Product Name:-'.$prodCart['Name'];
									echo"<br>";
									echo 'Quantity:- &nbsp'.$prodCart['qty'];
									echo "<br>";
									


								}
				
										?>
									
									</textarea>
											  </div>
											  <div class="form-group-submit" style="width:fit-content;" id="submit01">
											  <input type="submit" name="submit" id="sub01"class="form-control " value="Send Quotation" style="background-color:#3333ff;">
											  </div>
											  
										</form>
										</div>

                                       
                    </div>
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</body>

		<?php	$this->load->view('user/layouts/ULFooter');?>
	
		<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>

<script type="text/javascript">
	$(document).ready(function(){
		
		



	
		$(document).on('click','.del',function(){
			
			var row_id=$(this).data("productid"); 
			$.ajax({
				url : "<?php echo base_url('cart/removeItem');?>",
				method : "POST",
				data : {row_id : row_id},
				success :function(data){
					$('#Ucart').html(data),
					$("#successmsg").html('The Cart Item Has Been Deleted Successfully'),
					$.ajax({
				url : "<?php echo base_url('cart/cartnum');?>",
				success :function(data){
					$('#cart').text(data);
				
				}
				
			});
					
				}
				
			});
		});

	

			$(document).on('click','.update-cart-qty',function(){
			var row_id   = $(this).data("rowid");
			var product_id   = $(this).data("productid");
			var quantity   	  = $('#'+product_id).val();
			$.ajax({
				url : "<?php echo base_url('cart/update');?>",
				method : "POST",
				data : {row_id:row_id,  quantity: quantity},
				success: function(data){
					//$('#detail_cart').html(response);
					
					$('#Ucart').html(data),
					$('#successUmsg').html("Your Product has been Updated Successfully");
					
					
				}
			});
		});
		
	
	});
	
		

		





</script>

<script src="<?php echo public_url() ?>assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="<?php echo public_url() ?>assets/js/popper.js"></script>
        <script src="<?php echo public_url() ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo public_url() ?>assets/js/jquery.counterup.min.js"></script>
        <script src="<?php echo public_url() ?>assets/js/waypoints.min.js"></script>
        <script src="<?php echo public_url() ?>assets/js/elevetezoom.js"></script>
        <script src="<?php echo public_url() ?>assets/js/ajax-mail.js"></script>
        <script src="<?php echo public_url() ?>assets/js/owl.carousel.min.js"></script>
        <script src="<?php echo public_url() ?>assets/js/plugins.js"></script>
        <script src="<?php echo public_url() ?>assets/js/main.js"></script>
    </body>
</html>


