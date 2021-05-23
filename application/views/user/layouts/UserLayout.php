<header class="header-area">

          
            <div class="header-bottom transparent-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-5">
                            <div class="logo pt-39">
                                <a href="<?php echo base_url().'user/Phome/index' ?>"><img alt="reliancefoudaries" src="<?php echo base_url().'uploads/images/'.$logo->image; ?>" style="width: 100%;"></a>
                            </div>
                        </div>
                        <div class="col-xl-8 col-lg-7 d-none d-lg-block">
                            <div class="main-menu text-center">
                                <nav>
                                    <ul>
									<?php foreach ($dropdown as $key ): ?>
                		<?php if($key->menu_id!=$key->menu_item_id): ?> 
                		
                          <li><a class="hColor" href="<?php echo base_url().$key->M_link;?>"><?php echo $key->Mname?></a>
                    	
                		<?php else: ?>	
							<li><a class="hColor" href="<?php echo base_url().$key->M_link; ?>">Products</a>
                     
                        <ul class="submenu" style="width:max-content;">                       	 
                        	<?php foreach ($select as $list): ?>	
                        	<?php if($key->menu_id==$list->Mmenu): ?>
                			<li>
                        	<a href="<?php echo base_url().$list->s_link;?>"><?php echo $list->Sname;?></a>
                    		</li>
                		<?php endif; ?>	                        
                        <?php endforeach; ?>                        	
                        </ul>
                   		 </li>
                    	<?php endif; ?>
                    <?php endforeach ?>               
                                                  
                                       
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-8 col-sm-8 col-7">
                            <div class="search-login-cart-wrapper">
                                <div class="header-search same-style">
                                    <button class="search-toggle">
                                        <i class="icon-magnifier s-open"></i>
                                        <i class="ti-close s-close"></i>
                                    </button>
                                    <div class="search-content">
                                        <form action="#">
                                            <input type="text" placeholder="Search">
                                            <button>
                                                <i class="icon-magnifier"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                              
                                <div class="header-cart same-style">
                                    <button class="icon-cart">
									<a href="<?php echo base_url();?>cart/">   <i class="icon-handbag"></i> </a>
                                        <span id="cart"class="count-style" style="background-color:blue;"><?php $this->load->library('cart')?> <?php echo $rows = count($this->cart->contents()); ?></span>
                                    </button>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu-area electro-menu d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                            <div class="mobile-menu">
                                <nav id="mobile-menu-active">
                                    <ul class="menu-overflow">
									<?php foreach ($dropdown as $key ): ?>
                		<?php if($key->menu_id!=$key->menu_item_id): ?> 
                		
                          <li><a class="hColor" href="<?php echo base_url().$key->M_link;?>"><?php echo $key->Mname?></a>
                    	
                		<?php else: ?>	
							<li><a class="hColor" href="<?php echo base_url().$key->M_link; ?>">Products</a>
                     
                        <ul class="submenu" style="width:max-content;">                       	 
                        	<?php foreach ($select as $list): ?>	
                        	<?php if($key->menu_id==$list->Mmenu): ?>
                			<li>
                        	<a href="<?php echo base_url().$list->s_link;?>"><?php echo $list->Sname;?></a>
                    		</li>
                		<?php endif; ?>	                        
                        <?php endforeach; ?>                        	
                        </ul>
                   		 </li>
                    	<?php endif; ?>
                    <?php endforeach ?>           

                                      
										
                                        
												
												

                                            </ul>
                                        </li>
									
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
		


		