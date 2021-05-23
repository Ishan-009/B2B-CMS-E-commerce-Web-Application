<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('admin/include/head'); ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

 
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
		<?php if($this->session->flashdata('register')):?>
	<div align ="center" style="color: red" class="bg-success" style="width: 100%;">
	<?php echo $this->session->flashdata('register');?>
</div>
<?php endif;?>
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="<?php echo base_url().'user/User_Login/login'?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
          <span class="fa fa-user" aria-hidden="true"></span>
            </div>
          </div>
				</div>
				<?php echo form_error('username');?>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password"name="password">
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
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-8" style="padding: 0 0 0 100px;">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


      <p class="mb-0" style="padding: 2px 0 0 0;">
        <a href="forgot-password.html">I forgot my password</a>
	  </p>
	  
      <p class="mb-2" style="padding: 5px 0 0 70px;">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<?php if($this->session->flashdata('Login')):?>
	<div align ="center" style="color: red" class="bg-success" style="width: 100%;">
	<?php echo $this->session->flashdata('Login');?>
</div>
<?php endif;?>


<!-- /.login-box -->

<!-- jQuery -->
<?php $this->load->view('admin/include/footer'); ?>
</body>
</html>
