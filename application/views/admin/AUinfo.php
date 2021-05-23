



<?php $this->load->view('layout/layouts.php');?>
<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body text-center" style="height:850px">

              <h3 style="padding-top: 10px;">Welcome To Add Information  Section 	</h5>
					 <!-- Main content -->
					 <?php if($this->session->flashdata('Image01')):?>
	<div align ="center" style="color: red" class="bg-danger" style="width: 100%;">
	<?php echo $this->session->flashdata('Image01');?>
</div>
<?php endif;?>
<?php if($this->session->flashdata('Ainfo')):?>
	<div align ="center" style="color: red" class="bg-success" style="width: 100%;">
	<?php echo $this->session->flashdata('Ainfo');?>
</div>
<?php endif;?>
<?php if($this->session->flashdata('error_msg')):?>
	<div align ="center" style="color: red" class="bg-success" style="width: 100%;">
	<?php echo $this->session->flashdata('error_msg');?>
</div>
<?php endif;?>
<?php if($this->session->flashdata('Image')):?>
	<div align ="center" style="color: red" class="bg-success" style="width: 100%;">
	<?php echo $this->session->flashdata('Image');?>
</div>
<?php endif;?>
		 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10" style="padding: 30px 0 0 250px">
            <!-- general form elements -->
            <div class="card card-primary" >
              <div class="card-header">
                <h3 class="card-title">Add Info</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php echo base_url();?>admin/UserL/au_info" method="post" enctype="multipart/form-data">
                <div class="card-body">
                 
		
				<div class="row">
                    <div class="col-sm-12" style="padding-left: 20px;">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>About Us</label>
                        <textarea class="text-area form-control" rows="3" id="desc" name="aboutus" > <?php echo set_value('aboutus');?>	</textarea>
                      </div>
										</div>
										<?php echo form_error('aboutus');?>
										<div class="col-sm-12" style="padding-left: 20px;">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Contact Us</label>
                        <textarea class="text-area form-control" rows="3" id="desc" name="contactus" > <?php echo set_value('contactus');?>	</textarea>
                      </div>
					  <?php echo form_error('contactus');?>
										</div>
								
										<br>
				<br>
                <div class="card-footer"style="padding-left: 320px">
                <input type="submit" name="submit" value="Add User Information" class="btn btn-primary">
                </div>
              </form>
            </div>
             
            






   
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
