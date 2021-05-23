<?php $this->load->view('layout/layouts.php');?>
<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body text-center" style="height:600px">

              <h3 style="padding-top: 10px;">Welcome To The Sub-menu Section	</h5>
				   <!-- Main content -->
				   <section class="content">
				  
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10" style="padding: 90px 0 0 150px;" >
            <!-- general form elements -->
						<?php if($this->session->flashdata('Image01')):?>
	<div align ="center" style="color: red" class="bg-danger" style="width: 100%;">
	<?php echo $this->session->flashdata('Image01');?>
</div>
<?php endif;?>
<br>
            <div class="card card-primary" >
              <div class="card-header">
               <h3 class="card-title"> Sub-menu  Section</h3>
              </div>
             
              <form  action="<?php echo base_url().'admin/UserL/Addsubmenu/'?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
				<div class="form-group">
				<label for="category">Main Menu</label>
				<select name="MainCategory01" id="Cat01" class="form-control">
				
					<!--Run for Loop -->
					<?php foreach($Mmenu as $category):?>
				<option value="<?php echo$category['Mid'];?>"><?php echo $category['Mname'];?></option>
					
					<?php endforeach;?>
				
				</select>
			
                  </div>

                  <div class="form-group">
					<label for="subcat01">Add Sub-menu</label>
					
                    <input type="text" name="submenu" class="form-control" placeholder="Enter Sub-menu"	>
                  </div>
				  <div class="form-group">
					
					
                    <input type="hidden" name="Mmenu" class="form-control">
                  </div>
									<?php echo form_error('submenu');?>
                <!-- /.card-body -->
							

								<div class="card-footer">
                  <button type="submit" class="btn btn-success">Submit</button>
								</div>
	
							</form>
				
            </div>
		
							</div>
							<?php if($this->session->flashdata('Subcat')):?>
	<div align ="center" style="color: red" class="bg-success" style="width: 100%;">
	<?php echo $this->session->flashdata('Subcat');?>
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
