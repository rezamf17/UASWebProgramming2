<div class="wrapper">
<div class="container">
	<div class="panel-body">
		<div class="form-group">
				
				<form action="<?= base_url('Myadmin/f_editdata');?>" method="post">
					<?php 
						if(!empty($user)){
				 	?>
					<?php foreach($user as $u){ ?>
					<center class="editan"><h1>Data Mahasiswa</h1></center>		
					<input name="id" maxlength="12" value="<?= $u->id; ?>" hidden>
					<div class="col-md-12">
					</div>
					<div class="">	
						<input type="test" name="npm" class="form-control" maxlength="8" placeholder="NPM" value="<?= $u->npm; ?>">
					</div>
					<div class="">
						<label for="nama"></label> 	
						
						<input type="test" name="nama" class="form-control" maxlength="50" placeholder="Nama" value="<?= $u->nama; ?>">
					</div>
					<div class="">						
						<input type="test" name="kelas" class="form-control" maxlength="15" placeholder="Kelas" value="<?= $u->kelas; ?>">
					</div>
					<div class="">						
						<input type="test" name="semester" class="form-control" maxlength="1" placeholder="Semester" value="<?= $u->semester; ?>">
					</div>
					<div class="">						
						<input type="test" name="jurusan" class="form-control" maxlength="15" placeholder="Jurusan" value="<?= $u->jurusan; ?>">
					</div>
					<div class="col-sm-6">
						<button type="submit" onclick="runPopup()" class="btn btn-success">Submit</button>
						<button type="#" class="btn btn-danger">Cancel</button>
					</div>
					<?php } ?>

				<?php } else{
					// redirect ('Myadmin/error');
					echo "Data Kosong! <center>";
				}
				?>
				</form>
			</div>
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
