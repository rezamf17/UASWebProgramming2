<div class="wrapper">
<div class="container">
	<img src="<?php echo base_url(); ?>assets/logo sttb.png" class="setting">		
		<h2>Register Admin</h2>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/style.css'); ?>">
	<form action="<?= base_url('Register/f_register');?>" method="post">
		<div>
			<?= $this->session->flashdata('message'); ?>
		</div>
		<div class="form">
			<input type="text" name="username" class="form-control" placeholder="Username" required="required">
		</div>
		<div class="form">
			<input type="password" name="password" class="form-control" placeholder="Password" required="required" id="txtPassword">
		</div>
		<div class="form">
			<input type="password" name="retype-password" class="form-control" placeholder="retype-password" required="required" id="txtConfirmPassword">
		</div>
		<div class="form">
			<button type="submit" class="btn btn-primary btn-block" id="btnSubmit">Register</button>
		</div>
			<p class="text-center">Sudah punya akun ?</a></p>	
	<p class="text-center"><a href="http://localhost/UAS/">Login disini</a></p>
	</form>

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
