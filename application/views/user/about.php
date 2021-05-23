<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Marten - Pet Food eCommerce Bootstrap4 Template</title>
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
		<script src="<?php echo public_url()?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
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
        <div class="breadcrumb-area pt-95 pb-95 bg-img" style="background-color:black;"> <!-- style="background-image:url(<?php //<?php echo public_url();?>assets/img/banner/banner-2.jpg);"-->
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>About Us</h2>
                    <ul>
                        <li><a href="<?php echo base_url().'user/Phome/index'?>">home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="about-us-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="about-us-img pr-30 wow fadeInLeft">
                            <img alt="" src="<?php echo public_url()?>Images/SteelBusiness.jpg" style="width:100%; height:auto">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 d-flex align-items-center">
                        <div class="about-us-content">
                            <h2>About Us</h2>
                            <p>
Reliance Foundries was established by Mr. Subhash Kapur in the year 1987 in Palapye. Mr. Kapur arrived to attend a trade fair and decided to set up an industry in Botswana. The first foundry was established in Palapye, a small town, about 275 Km from the Capital Gaborone. The foundry started at a small scale with the help of 20 local workers and it grew with market demand and forces and now employs nearly 400 workers. Foundry in Palapye uses Coke as energy, to melt cast iron at a temperature of 1100 degrees Celsius.

The company set up a second foundry at Ramotswa, about 22 Km from Gaborone. The steel is melted in Electric Induction Furnace to manufacture Cast Iron, SG Iron castings according to customer’s requirements. This foundry is semi automatic and most suitable for mass production.

The company diversified into other branches of steel manufacturing and set up a forging and fabrication division in 2005. Reliance manufactures parts such as Steel sweeps and shearing blades for agriculture implements industry and has a reasonably big market share in South African market.

Company has commissioned Steel Ingot manufacturing unit in December 2009 and Steel Rolling mill in January 2010. Steel ingot mould have already been casted in Palapye foundry. Reliance is rerolling Round bars , Square bars , Flat Irons , Fencing Standards and angle Irons of various sizes and specifications at Ramotswa.

Presently Mr. Sumit Kapur manages the company. He is graduate in production technology from Western Illinois University, USA and a MBA from University of Surry, UK. He has more than 10 years experience in running foundries and steel re-rolling Mills.</p>
<br>
							
<div class="about-us-btn">
                                <a class="btn-style" href="<?php echo base_url().'user/Phome/Contact'?>">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
		<?php	$this->load->view('user/layouts/ULFooter');?>
		
		
		
		
		
		<!-- all js here -->
        <script src="<?php echo public_url()?>assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="<?php echo public_url()?>assets/js/popper.js"></script>
        <script src="<?php echo public_url()?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo public_url()?>assets/js/jquery.counterup.min.js"></script>
        <script src="<?php echo public_url()?>assets/js/waypoints.min.js"></script>
        <script src="<?php echo public_url()?>assets/js/elevetezoom.js"></script>
        <script src="<?php echo public_url()?>assets/js/ajax-mail.js"></script>
        <script src="<?php echo public_url()?>assets/js/owl.carousel.min.js"></script>
        <script src="<?php echo public_url()?>assets/js/plugins.js"></script>
        <script src="<?php echo public_url()?>assets/js/main.js"></script>
    </body>
</html>
