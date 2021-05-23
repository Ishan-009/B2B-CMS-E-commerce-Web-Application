<footer class="footer-area">
            <div class="footer-top pt-80 pb-50 gray-bg-2" style="background-color:  #001a66;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-5 col-md-6 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="footer-info-wrapper">
                                    <div class="footer-logo">
                                        <a href="<?php echo base_url().'user/Phome/index' ?>">
                                           <h5 style="color: whitesmoke;">About Us</h5>
                                        </a>
									</div>								
									<strong><p style="color: whitesmoke;"><?php echo $info['about'];?></p></strong>
                                    <div class="social-icon">
                                        <ul>
                                            <li style="color: whitesmoke;"><a  style="color: whitesmoke;"href="#"><i class="icon-social-twitter"></i></a></li>
                                            <li><a  style="color: whitesmoke;" href="#"><i class="icon-social-instagram"></i></a></li>
                                            <li><a  style="color: whitesmoke;" href="#"><i class="icon-social-linkedin"></i></a></li>
                                            <li><a   style="color: whitesmoke;"href="#"><i class="icon-social-skype"></i></a></li>
                                            <li><a  style="color: whitesmoke;"href="#"><i class="icon-social-dribbble"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget mb-30 pl-50">
                                <h4 style="color:whitesmoke;"class="footer-title">USEFUL LINKS</h4>
                                <div class="footer-content">
                                    <ul>
									<?php foreach($menu as $m):?>
                                        <li><a style="color: whitesmoke;" href="<?php echo base_url().$m['M_link'];?>"><?php echo $m['Mname'];?></a></li>
                                      <?php endforeach;?>
                                    </ul>
                                </div>
                            </div>
                        </div>
						<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-widget mb-30 pl-50">
                                <h4 style="color:whitesmoke;"class="footer-title">Contact Us</h4>
                                <div class="footer-content">
                                    <ul>
									<strong><p style="color: whitesmoke;"><?php echo $info['contact'];?></p></strong>
                                    </ul>
                                </div>
                            </div>
                        </div>
					
									

                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
							<div class="header" style="text-align: center;"><h5 style="color:whitesmoke">Map</h5></div>
                        <iframe src="https://maps.google.com/maps?q=Gaborone&t=&z=13&ie=UTF8&iwloc=&output=embed" width="fit-content" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom gray-bg-3 pt-17 pb-15">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="copyright text-center">
                                <p>Reliance Foundries(Ptv) Ltd. Copyright 2020. All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</footer>
</body>
