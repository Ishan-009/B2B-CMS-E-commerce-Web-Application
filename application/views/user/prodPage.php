<!doctype html>
<?php

// This Is Sub-Category Listing Page , reason:- whole Project change at Last Moment 
?>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Marten - Pet Food eCommerce Bootstrap4 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	
		<!-- all css here -->
		<link rel="stylesheet" href="<?php echo public_url() ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo public_url() ?>assets/css/animate.css">
        <link rel="stylesheet" href="<?php echo public_url() ?>assets/css/simple-line-icons.css">
        <link rel="stylesheet" href="<?php echo public_url() ?>assets/css/themify-icons.css">
        <link rel="stylesheet" href="<?php echo public_url() ?>assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo public_url() ?>assets/css/slick.css">
        <link rel="stylesheet" href="<?php echo public_url() ?>assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="<?php echo public_url() ?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo public_url() ?>assets/css/responsive.css">
        <script src="<?php echo public_url() ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
		<style>
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

	<?php	$this->load->view('user/layouts/UserLayout');?>
	<?php 

foreach($Products as $product):
{
	$productid=$product['id'];
	$productname=$product['name'];
	$prodImage= $product['image'];
	$productCat=$product['category'];
	$productSub=$product['subcategory'];
	$productDesc=$product['description'];
	$prodImage1=$product['image1'];
	$prodImage2=$product['image2'];
	$productImage3=$product['image3'];
	$stock=$product['status'];

}
endforeach;

?>
       
        <div class="breadcrumb-area pt-95 pb-95 bg-img" style="background-color:Black;"> <!-- style="background-image:url(<?php //echo base_url().'uploads/images/'.$prodImage;?>);"-->
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>Product Details</h2>
                    <ul>
                        <li><a href="<?php echo base_url().'user/Phome/'?>">home</a></li>
                        <li class="active">Product Details</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="shop-area pt-95 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="product-details-img">
                            <img id="zoompro" src="<?php echo base_url().'uploads/images/'.$prodImage;?>" data-zoom-image="<?php echo base_url().'uploads/images/'.$prodImage;?>" alt="zoom"/>
                            <div id="gallery" class="mt-12 product-dec-slider owl-carousel">
                                <a data-image="assets/img/product-details/l1.jpg" data-zoom-image="assets/img/product-details/bl1.jpg">
                                    <img src="<?php echo base_url().'uploads/images/'.$prodImage;?>" alt="">
                                </a>
                                <a data-image="assets/img/product-details/l2.jpg" data-zoom-image="assets/img/product-details/bl2.jpg">
                                    <img src="<?php echo base_url().'uploads/images/'.$prodImage1;?>" alt="">
                                </a>
                                <a data-image="assets/img/product-details/l3.jpg" data-zoom-image="assets/img/product-details/bl3.jpg">
                                    <img src="<?php echo base_url().'uploads/images/'.$prodImage2;?>" alt="">
                                </a>
                                <a data-image="assets/img/product-details/l4.jpg" data-zoom-image="assets/img/product-details/bl4.jpg">
                                    <img src="<?php echo base_url().'uploads/images/'.$productImage3;?>" alt="">
                                </a>
                                <a data-image="assets/img/product-details/l3.jpg" data-zoom-image="assets/img/product-details/bl3.jpg">
                                    <img src="<?php echo base_url().'uploads/images/'.$prodImage2;?>" alt="">
                                </a>
                            </div>
                        </div>
					</div>
		





                    <div class="col-lg-6 col-md-6">
                        <div class="product-details-content">
                            <h2><?php echo$productname;?></h2>
                         
                           
                            <div class="in-stock">
                                <span><i class="ion-android-checkbox-outline"></i> <?php if($stock==0){echo "<p style='color:red'>Out of Stock</p>";} else { echo "In Stock";}?></span>
                            </div>
                            <div class="sku">
                                <span>SKU#: MS04</span>
                            </div>
                            <p><?php echo $productDesc?></p>

							 <div class="quality-wrapper mt-30 product-quantity">
                                <label>Qty:</label>
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" id="<?php echo $product['id']; ?>"type="text" name="qtybutton" value="1">
                                </div>
                            </div>
											<div class="product-list-action">
                                <div class="product-list-action-left">
								<button type="button" class="add_cart btn btn-primary btn-block" data-productid="<?php echo $product['id'];?>">Add To Quote</button>
								</div>
                                <div class="product-list-action-right">
                                    <a href="#" title="Wishlist">
                                        <i class="ti-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="social-icon mt-30">
                                <ul>
                                    <li><a href="#"><i class="icon-social-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-social-instagram"></i></a></li>
                                    <li><a href="#"><i class="icon-social-linkedin"></i></a></li>
                                    <li><a href="#"><i class="icon-social-skype"></i></a></li>
                                    <li><a href="#"><i class="icon-social-dribbble"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      

		<?php	$this->load->view('user/layouts/ULFooter');?>
			<!-- modal -->
        
		
		
		
		<!-- all js here -->
		<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
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
		<script type="text/javascript">
	$(document).ready(function(){
		$('.add_cart').click(function(){
			var product_id   = $(this).data("productid");
			var quantity   	  = $('#'+product_id).val();
			$.ajax({
				url : "<?php echo base_url('user/Phome/AddToCart');?>",
				method : "POST",
				data : {product_id: product_id, quantity: quantity},
				success: function(response){
					//$('#detail_cart').html(response);
					$('#successmsg').html("Your Product has been added to cart"),
					$('#cart').text(response);
					
				}
			});
		});

		




	});
</script>
    </body>
</html>
