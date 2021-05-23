

<?php $this->load->view('layout/layouts.php');?>
<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body text-center" style="height:800px">
	
              <h3 style="padding-top: 10px;">Welcome To The Add category Section 	</h5>
				   <!-- Main content -->
				   <section class="content">
				  
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-9" style="padding:120px 0 0 260px;" >
					<?php if($this->session->flashdata('Image01')):?>
	<div align ="center" style="color: red" class="bg-danger" style="width: 100%;">
	<?php echo $this->session->flashdata('Image01');?>
</div>
<?php endif;?>
<br>
            <!-- general form elements -->
            <div class="card card-primary" >
              <div class="card-header">
               <h3 class="card-title"> Main category Section</h3>
              </div>
             
              <form  action="<?php echo base_url().'admin/category/AddCat'?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="addcat01">Add Main  Category</label>
                    <input type="text" name="category" class="form-control" placeholder="Enter Main Category">
                  </div>
									<?php echo form_error('category');?>
									<label>Upload Product Images </label>
										<div class="custom-file">
                	<input type="file" class="custom-file-input" name="profile_img" multiple/>			
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>

                <!-- /.card-body -->

								<div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
								</div>
	
							</form>
				
            </div>
		
							</div>
							<?php if($this->session->flashdata('category')):?>
	<div align ="center" style="color: red" class="bg-success" style="width: 100%;">
	<?php echo $this->session->flashdata('category');?>
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
