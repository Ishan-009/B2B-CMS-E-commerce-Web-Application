<!DOCTYPE html>
<html>
<head>
	<style>
		


	</style>
	<?php $this->load->view('admin/include/head'); ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
 
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>Admin</b>LTE</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body" >
	  <p class="login-box-msg" ><h6 >User Registration</h6></p>
	  <?php if($this->session->flashdata('register')):?>
	<div align ="center" style="color: red" class="bg-success" style="width: 100%;">
	<?php echo $this->session->flashdata('register');?>
</div>
<?php endif;?>

      <form action="<?php echo base_url().'user/User_register/register'?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
		</div>
		<?php echo form_error('username');?>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
		  </div>
		 </div>
		 <?php echo form_error('email');?>
		 <div class="input-group mb-3">
          <input type="number" class="form-control" placeholder="Mobile Number" name="mobile">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-mobile" aria-hidden="true"></span>
            </div>
          </div>
		</div>
		<?php echo form_error('mobile');?>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
		</div>
		<?php echo form_error('password');?>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="check" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
		  </div>
		  <?php echo form_error('check');?>
		  <br>
          <!-- /.col -->
		  &nbsp;&nbsp; &nbsp;&nbsp; <div class="col-8" style="padding: 0 0 0 120px">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
<br>
      <a href="login.html" class="text-center" style="padding: 0 0 0 55px;">I already have an Existing Account</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<?php $this->load->view('admin/include/footer'); ?>
</body>
</html>
