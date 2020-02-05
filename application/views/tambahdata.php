<div class="wrapper">
<div class="container">
	<div class="panel-body">
		<div class="form-group">
			<div class="col-md-12">
				<?= $this->session->flashdata('message'); ?>
			</div>
			<form action="<?= base_url('Myadmin/f_tambahdata');?>" method="post">
				<h1> Data Mahasiswa</h1>
				<center>
				<div class="tbl-header">
	<table cellpadding="0" cellspacing="0" border="0">
		<thead>
			<tr>
				<td>No</td>
				<td>Npm</td>
				<td>Nama</td>
				<td>Kelas</td>
				<td>Semester</td>
				<td>Jurusan</td>
				<td>Aksi</td>
			</tr>
			</thead>
		</table>
	</div>		

	<div class="tbl-content">
	    <table cellpadding="0" cellspacing="0" border="0">
<tbody>
			<?php
			$no = 1;
			foreach($user as $u){
			?>
			<tr>
				<td><?= $no++ ?></td>
				<td><?= $u->npm ?></td>
				<td><?= $u->nama ?></td>
				<td><?= $u->kelas ?></td>
				<td><?= $u->semester ?></td>
				<td><?= $u->jurusan ?></td>
				<td>
					<i class="fas fa-edit"></i>
					<?= anchor('Myadmin/editdata/'.$u->id,'Edit |');?>
					<!-- error handling untuk membuat confirmasi dialog pada sebuah button delete -->
					<?= anchor('Myadmin/hapusdata/'.$u->id,' Delete', array('class'=>'delete', 'onclick'=>"return confirmDialog();"));?>
				</td>
			</tr>
			<?php
				}
			?>
		</tbody>
			</table>
		</div>
	</center>

<div class="edan">
	<a href="<?= base_url('Login_c/f_logout');?>" >Logout</a>
</div>
		<div class="tambahdata">
 			<a class="button" type="submit" href="#popup1">Tambah Data </a>		
</div>

<div id="popup1" class="overlay">
	<div class="popup">
		<h2>Tambah Data</h2>
		<a class="close" href="#">&times;</a>
		<div class="tilukg">
			 <form>
          <input type="text" name="npm" class="username form-control" placeholder="NPM"/>
          <input type="text" name="nama" class="password form-control" placeholder="Nama"/>
          <input type="text" name="kelas" class="username form-control" placeholder="Kelas"/>
          <input type="text" name="semester" class="password form-control" placeholder="Semester"/>
          <input type="text" name="jurusan" class="username form-control" placeholder="Jurusan"/>
          <input class="gas" type="submit" onclick="runPopup()" value="Tambah" />
        </form>
		</div>
	</div>
</div>
</form>
<div id="popup11" class="overlays">
	<div class="popup1">
		<h2>Tambah Data</h2>
		<a class="close" href="#">&times;</a>
		
	</div>
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

