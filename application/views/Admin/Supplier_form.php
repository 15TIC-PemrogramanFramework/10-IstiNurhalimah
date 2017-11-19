<?php $this->load->view('Templates/Admin/Header'); ?>
	<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
	<div class="page-header pull-left">
		<div class="page-title">
			Supplier</div>
		</div>
		<ol class="breadcrumb page-breadcrumb pull-right">
			<li><i class="fa fa-table "></i>&nbsp;<a href="Home.php">Table</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
			<li class="hidden"><a href="#">Supplier</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
			<li class="active">Supplier</li>
		</ol>
		<div class="clearfix">
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 text-right">
			<div style="margin-top:20px;margin-bottom:10px;">
			</div>
		</div>
	</div>
		<?php $this->session->flashdata('supply') ?>
		<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
		<div class="panel panel-blue" style="background:#FFF;">
		<div class="panel-heading">Supplier</div>
		<div class="panel-body">
			<table class="table table-hover table-bordered">
				<thead>
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama_supplier" class="form-control" placeholder="Masukkan nama"
				required value="<?php echo $nama_supplier; ?>">	
			</div>
			<div class="form-group">
				<label>Alamat</label>
				<input type="text" name="alamat_supplier" class="form-control" placeholder="Masukkan alamat"
				required value="<?php echo $alamat_supplier; ?>">	
			</div>
			<div class="form-group">
				<label>No Telp</label>
				<input type="text" name="notelp_supplier" class="form-control" placeholder="Masukkan no telp"
				required value="<?php echo $notelp_supplier; ?>">	
			</div>
	<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	<a href="<?php echo site_url('Supplier/index') ?>" class="btn btn-default">Cancel</a>
</form>
</div>
</div>
<?php $this->load->view('Templates/Admin/Footer'); ?>