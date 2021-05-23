



<?php $this->load->view('layout/layouts.php');?>
<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body text-center" style="height:700px">

              <h3 style="padding-top: 10px;">Welcome To Edit Main-Menu Section 	</h5>
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
                <h3 class="card-title">Edit Main-Menu</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php echo base_url();?>admin/UserL/updateM" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
					  <input type="hidden" name="id"value="<?php echo $menu['Mid']?>">

                    <label for="ProductName">Main-Menu Name</label>
                    <input type="text" name="menu" class="form-control" id="ProdName01" placeholder="Enter Main-Menu  Name" value="<?php echo set_value('name',$menu['Mname']);?>">
				  </div>
				  <?php echo form_error('menu');?>
				  
                 
                   


                <div class="card-footer">
                <input type="submit" name="submit" value="Update Main-Menu" class="btn btn-primary">
                </div>
              </form>
            </div>
             
            <br>
<?php if($this->session->flashdata('menu')):?>
	<div align ="center" style="color: red" class="bg-success" style="width: 100%;">
	<?php echo $this->session->flashdata('menu');?>
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
