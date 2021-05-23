<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Marten - Pet Food eCommerce Bootstrap4 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo public_url()?>assets/img/favicon.png">
		
		<!-- all css here -->
        <link rel="stylesheet" href="<?php echo public_url()?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo public_url()?>assets/css/animate.css">
        <link rel="stylesheet" href="<?php echo public_url()?>assets/css/simple-line-icons.css">
        <link rel="stylesheet" href="<?php echo public_url()?>assets/css/themify-icons.css">
        <link rel="stylesheet" href="<?php echo public_url()?>assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo public_url()?>assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="<?php echo public_url()?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo public_url()?>assets/css/responsive.css">
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
  .responsive {
  width: 100%;
  height:auto;
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
                    <h2>Contact Us</h2>
                    <ul>
                        <li><a href="<?php echo base_url().'user/Phome/index'?>">home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="contact-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="contact-info-wrapper text-center mb-30">
                            <div class="contact-info-icon">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="contact-info-content">
                                <h4>Our Location</h4>
                                <p>Address: P.O BOX 2252, Gaborone, Botswana</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="contact-info-wrapper text-center mb-30">
                            <div class="contact-info-icon">
                                <i class="ti-mobile"></i>
                            </div>
                            <div class="contact-info-content">
                                <h4>Contact us Anytime</h4>
                                <p>Mobile: +267 5380701</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="contact-info-wrapper text-center mb-30">
                            <div class="contact-info-icon">
                                <i class="ti-email"></i>
                            </div>
                            <div class="contact-info-content">
                                <h4> 24*7 Hours Support</h4>
                                <p><a href="#">info@reliancefoundries.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="contact-message-wrapper">
                            <h4 class="contact-title">GET IN TOUCH</h4>
                            <div class="contact-message">
                                <form  action="<?php echo base_url().'user/Phome/Contact'?>" method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="contact-form-style mb-20">
                                                <input name="name" placeholder="Full Name" type="text">
											</div>
											<?php echo form_error('name');?>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="contact-form-style mb-20">
                                                <input name="email" placeholder="Email Address" type="email">
											</div>
											<?php echo form_error('email');?>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="contact-form-style mb-20">
                                                <input name="subject" placeholder="Subject" type="text">
											</div>
											<?php echo form_error('subject');?>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="contact-form-style">
												<textarea name="message" placeholder="Message"></textarea>
												<?php echo form_error('message');?>
                                                <button class="submit btn-style" type="submit" style="background-color:#0943ff ;">SEND MESSAGE</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
		<?php if($this->session->flashdata('Mail')):?>
			<div align ="center" style="color: white" class="bg-success" style="width: 100%;">
	<?php echo $this->session->flashdata('Mail');?>
</div>
<?php endif;?>

<?php if($this->session->flashdata('MailN')):?>
	<div align ="center" style="color: white" class="bg-danger" style="width: 100%;">
	<?php echo $this->session->flashdata('MailN');?>
</div>
<?php endif;?>

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
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmGmeot5jcjdaJTvfCmQPfzeoG_pABeWo"></script>
		
        <script src="<?php echo public_url()?>assets/js/main.js"></script>
    </body>
</html>
