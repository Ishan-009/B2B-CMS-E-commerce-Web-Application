

<?php $this->load->view('layout/layouts.php');?>
<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body text-center" style="height:800px">
	
              <h3 style="padding-top: 10px;">Welcome To The Add Menu Section 	</h5>
				   <!-- Main content -->
				   <section class="content">
				   <?php echo form_error('category');?>
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-9" style="padding:120px 0 0 260px;" >
			
<br>
            <!-- general form elements -->
            <div class="card card-primary" >
              <div class="card-header">
               <h3 class="card-title"> Main Menu Section</h3>
              </div>
             
              <form  action="<?php echo base_url().'admin/UserL/addmenu'?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="addcat01">Add Main Menu </label>
                    <input type="text" name="menu" class="form-control" placeholder="Enter Main Menu">
                  </div>
									<?php echo form_error('menu');?>
								

                <!-- /.card-body -->

								<div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
								</div>
	
							</form>
				
            </div>
		
							</div>
							<?php if($this->session->flashdata('menu')):?>
	<div align ="center" style="color: red" class="bg-success" style="width: 100%;">
	<?php echo $this->session->flashdata('menu');?>
</div>
<?php endif;?>

            </div>
					
            
          </div>
          <!-- /.col-md-6 -->
        
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
   
  </div>
	<script src="<?php echo public_url();?>admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo public_url();?>admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="<?php echo public_url();?>admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo public_url();?>admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo public_url();?>admin/dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
