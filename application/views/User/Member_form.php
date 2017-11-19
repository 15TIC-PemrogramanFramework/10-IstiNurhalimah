<?php $this->load->view('Templates/User/Header'); ?>
		<?php $this->session->flashdata('beli') ?>
		<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama Member</label>
				<input type="text" name="nama_member" class="form-control" placeholder="Masukkan nama member"
				required value="<?php echo $nama_member; ?>">	
			</div>
			<div class="form-group">
				<label>Password Member</label>
				<input type="text" name="password_member" class="form-control" placeholder="Masukkan password member"
				required value="<?php echo $password_member; ?>">	
			</div>
			<div class="form-group">
				<label>Alamat Member</label>
				<input type="text" name="alamat_member" class="form-control" placeholder="Masukkan alamat member"
				required value="<?php echo $alamat_member; ?>">	
			</div>
			<div class="form-group">
				<label>No Telp Member</label>
				<input type="text" name="notelp_member" class="form-control" placeholder="Masukkan notel member"
				required value="<?php echo $notelp_member; ?>">	
			</div>
			<input type="hidden" name="id_member" value="<?php echo $id_member; ?>">
			<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
			<a href="<?php echo site_url('User')?>" class="btn btn-default">Cancel</a>
		</form>
	</div>
</div>
</div>
<?php $this->load->view('Templates/User/Footer'); ?>