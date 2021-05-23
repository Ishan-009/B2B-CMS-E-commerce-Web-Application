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
	.responsive {
  width: 100%;
  height:200px;
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

<div class="product-area pt-95 pb-70 gray-bg">		
            <div class="container">
                <div class="section-title text-center mb-55">
                    <h4>Sub Categories</h4>
                   
				</div>
				<?php $i=count($subcategory);
if($i<4):
?>
<div class="row">
                   
		
				   <?php foreach($subcategory as $SubProd):?>
					<div class="col-xl-5 col-lg-6 col-md-6 col-sm-6">
						   <div class="product-wrapper mb-20">
							   <div class="product-img" style="margin-right:50px">
								   <a href="<?php echo base_url().'user/Phome/SubProd/'.str_replace(" ","-",$SubProd['name']);?>">
									   <img src="<?php echo base_url().'uploads/images/'.$SubProd['image']; ?>" alt="" class="responsive">
								   </a>
						
							   <div class="product-content">
								   <h4><a href="#"><?php echo $SubProd['name'];?></a></a></h4>
							   
							   </div>
						   </div>
					   </div>
				
   </div>
   
   <?php endforeach;?>


				</div>
			</div>

<?php else:?>
	<div class="row">
                   
		
				   <?php foreach($subcategory as $SubProd):?>
   <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
						   <div class="product-wrapper mb-20">
							   <div class="product-img" style="fle">
								   <a href="<?php echo base_url().'user/Phome/SubProd/'.str_replace(" ","-",$SubProd['name']);?>">
									   <img src="<?php echo base_url().'uploads/images/'.$SubProd['image']; ?>" alt="" class="responsive">
								   </a>
						
							   <div class="product-content">
								   <h4><a href="#"><?php echo $SubProd['name'];?></a></a></h4>
							   
							   </div>
						   </div>
					   </div>
				
   </div>

	
   <?php endforeach;?>
	</div>
</div>


<?php endif;?>




		










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
