<?php $this->load->view('Templates/Admin/Header'); ?>
<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Data Beli</h1>
		</div>
		<?php $this->session->flashdata('beli') ?>
<form action="<?php echo $aksi; ?>" method="post">
	<div class="form-group">
		<label>ID Beli</label>
		<input type="text" class="form-control" name="id_beli" required placeholder="Masukkan id_beli" value="<?php echo $id_beli; ?>">
	</div>
	<div class="form-group">
		<label>Nama Member</label>
		<input type="text" class="form-control" name="nama_member" required placeholder="Masukkan nama_member" value="<?php echo $nama_member; ?>">
	</div>
	<div class="form-group">
		<label>Nama Barang</label>
		<input type="text" class="form-control" name="nama_barang" required placeholder="Masukkan nama_barang" value="<?php echo $nama_barang; ?>">
	</div>
	<div class="form-group">
		<label>Jumlah Beli</label>
		<input tppe="text" class="form-control" name="jumlah_beli" required placeholder="Masukkan jumlah_beli" value="<?php echo $jumlah_beli; ?>">
	</div>
	<input type="hidden" name="id" value="<?php echo $id; ?>" />
	<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	<a href="<?php echo site_url('index.php/admin') ?>" class="btn btn-default">Cancel</a>
</form>
<?php $this->load->view('Templates/Admin/Footer'); ?>