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
	.td-check{
		padding-left: 55px;
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
	
       
	<div class="breadcrumb-area pt-95 pb-95 bg-img" style="background-color:black;"> <!-- style="background-image:url(<?php //<?php echo public_url();?>assets/img/banner/banner-2.jpg);"-->
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>Sub-Categories</h2>
                    <ul>
                        <li><a href="<?php echo base_url().'user/Phome/index'?>">Home</a></li>
                        <li class="active">Sub-Categories</li>
                    </ul>
                </div>
            </div>
		</div>

		<?php //<?php print_r($Category);?>

		<div class="cart-main-area pt-95 pb-100">
            <div class="container">
                <h3 class="page-title">Product List</h3>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <form action="#">
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr>
										<th><input type="checkbox" id="h01" style="width:20px"></th>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Category</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

									<?php foreach ($Category as $product):?>
                                        <tr>
										<td>
										&nbsp;&nbsp;		&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;<input type="checkbox" class="td-check" style="width:max-content">
										</td>
                                            <td class="product-thumbnail">
                                                <a href="#"><img src="<?php echo base_url().'uploads/images/'.$product['image']?>" width="100px"></a>
                                            </td>
                                            <td class="product-name"><a href="<?php echo base_url().'user/Phome/AddToCart/'.$product['id']?>"><?php echo $product['name'];?></a></td>
                                            <td class="product-price-cart" style="padding-right: 25px;"><span class="amount"><?php echo $product['category'];?></span></td>
                                           
                                            <td class="product-cart">
											<div class="product-list-action">
                                <div class="product-list-action-left">
                                    <a class="addtocart-btn" href="<?php echo base_url().'user/Phome/AddToCart/'.$product['id']?>" title="Add to cart" style="width: fit-content;">
										<i class="fa fa-shopping-bag" >Add To Quote</i>
											</td>
                                        </tr>
                                <?php endforeach;?>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </form>

					</div>
				</div>
			</div>
		</div>
		



<br>





		<?php	$this->load->view('user/layouts/ULFooter');?>
			<!-- modal -->
        

		
		
		<!-- all js here -->
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
