<div class="wrapper">
<div class="container">
<img src="<?php echo base_url(); ?>assets/logo sttb.png" height="110px" width="110px">		
<h2>Login Mahasiswa</h2>
  	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/style.css'); ?>">
	<form action="<?= base_url('Auth/login');?>" method="post">
	
		<div class="form">
			<input type="text" name="username" class="form-control" placeholder="Username" required="required">
		</div>
		<div class="form">
			<input type="password" name="password" class="form-control" placeholder="Password" required="required">
		</div>
		<div class="form">
			<button type="submit" class="btn btn-primary btn-block">Log In</button>
		</div>
		<div>
			<a href="<?= base_url('Login_c/');?>" class="pull-right">Admin?</a> <br>
		</div>
<!-- 		<div class="clearfix">
			<label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
			<a href="#" class="pull-right">Forgot Password?</a>
		</div> -->
			<font size="3">Belum punya akun ?</font>
	<p class="text-center"><a href="<?= base_url('Register2/');?>">Buat akun disini</a></p>
	</form>
</div>


<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
