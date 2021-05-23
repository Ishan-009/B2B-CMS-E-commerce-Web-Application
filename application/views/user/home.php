<!doctype html>
<html class="no-js" lang="zxx">
    <head>
		
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Reliance Foundaries </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo public_url() ?>assets/img/favicon.png">
		
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
		color:blue;
		
	}
	
	#scrollUp{
		background-color: #0943ff;


	}
	.main-menu li:hover>a{
		color: #0943ff;
	}
	a:hover{
	color: blue;
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
	
      
        <div class="slider-area">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo public_url().'Images/IndexBImg.jpg'?>" style="width: auto ;" alt="First slide"height="500px">
		</div>
	
<?php foreach($banner as $b):?>
    <div class="carousel-item">
	<img class="d-block w-100" src="<?php echo base_url().'uploads/images/'.$b['B_image']; ?>" style="width: auto;" alt="First slide"  height="500px">
		</div>
	<?php endforeach;?>

  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>
        <div class="product-area pt-95 pb-70 gray-bg">
            <div class="container">
                <div class="section-title text-center mb-55">
                    <h4 id="categories">Top-Categories</h4>
                
                </div>
                <div class="row" style="margin-left: 20px;">
								<?php foreach($category as $product):?>
                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6">
                        <div class="product-wrapper mb-10">
                            <div class="product-img">
														<a href="<?php echo base_url().'user/Phome/SubDetails/'.$product['id']?>">
																<img src="<?php echo base_url().'uploads/images/'.$product['image'];?>" alt="" height="300" style="width: 450;">
                            <div class="product-content">
														<h4><a href="<?php echo base_url().'user/Phome/SubDetails/'.$product['id']?>"><?php echo $product['name'];?></a></h4>

                            </div>
                        </div>
                    </div>
										</div>
										<?php endforeach;?>
								</div>
							
						</div>
				</div>
				</div>
		
       
              
						
	
	
		<?php	$this->load->view('user/layouts/ULFooter');?>
		
		
	
		
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



