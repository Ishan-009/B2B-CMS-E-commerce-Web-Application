
<?php $this->load->view('layout/layouts.php');?>
<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body text-center" style="height:700px">

              <h3 style="padding-top: 10px;">Welcome To Edit SUb-Category Section 	</h5>
				   <!-- Main content -->
		 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10	" style="padding: 40px 0 0 70px">
            <!-- general form elements -->
            <div class="card card-primary" style="border: 2;">
						<?php if($this->session->flashdata('Image01')):?>
	<div align ="center" style="color: red" class="bg-danger" style="width: 100%;">
	<?php echo $this->session->flashdata('Image01');?>
</div>
<?php endif;?>
<br>
              <div class="card-header">
                <h3 class="card-title">Edit Sub-Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php echo base_url();?>admin/category/UpdateSubcat" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
					  <input type="hidden" name="id"value="<?php echo $Subcat['id']?>">
                    <label for="ProductName">category Name</label>
                    <input type="text" name="name" class="form-control" id="ProdName01" placeholder="Enter Product Name" value="<?php echo set_value('name',$Subcat['name']);?>">
				  </div>
				  <?php echo form_error('name');?>
				  
                   <label for="customFile">Upload Image File</label> 

                    <div class="custom-file">
                	<input type="file" class="custom-file-input"  name="profile_img">			
                      <label class="custom-file-label" for="customFile" >Choose file</label>
                    </div>


                <div class="card-footer">
                <input type="submit" name="submit" value="Update Category" class="btn btn-primary">
                </div>
              </form>
            </div>
             
            
<?php if($this->session->flashdata('ScategoryU')):?>
	<div align ="center" style="color: red" class="bg-success" style="width: 100%;">
	<?php echo $this->session->flashdata('ScategoryU');?>
</div>
<?php endif;?>
<?php if($this->session->flashdata('Image01')):?>
	<div align ="center" style="color: red" class="bg-danger" style="width: 100%;">
	<?php echo $this->session->flashdata('error_msg');?>
</div>
<?php endif;?>
<?php if($this->session->flashdata('Error1')):?>
	<div align ="center" style="color: red" class="bg-danger" style="width: 100%;">
	<?php echo $this->session->flashdata('Error1');?>
</div>
<?php endif;?>





   
    </div>
   
  </div>
		  </div>
		</div>
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
