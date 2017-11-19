<?php $this->load->view('Templates/Admin/Header'); ?>
<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
	<div class="page-header pull-left">
		<div class="page-title">
			Data Barang</div>
		</div>
		<ol class="breadcrumb page-breadcrumb pull-right">
			<li><i class="fa fa-table "></i>&nbsp;<a href="Home.php">Table</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
			<li class="hidden"><a href="#">Data Barang</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
			<li class="active">Data Barang</li>
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
		<?php $this->session->flashdata('beli') ?>
		<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
		<div class="panel panel-blue" style="background:#FFF;">
		<div class="panel-heading">Data Barang</div>
		<div class="panel-body">
			<table class="table table-hover table-bordered">
				<thead>
			<div class="form-group">
				<label>Nama Barang</label>
				<input type="text" name="nama_barang" class="form-control" placeholder="Masukkan nama barang"
				required value="<?php echo $nama_barang; ?>">	
			</div>
			<div class="form-group">
				<label>Harga Barang</label>
				<input type="text" name="harga_barang" class="form-control" placeholder="Masukkan harga barag"
				required value="<?php echo $harga_barang; ?>">	
			</div>
			<div class="form-group">
				<label>Stok Barang</label>
				<input type="text" name="stok_barang" class="form-control" placeholder="Masukkan stok barang"
				required value="<?php echo $stok_barang; ?>">	
			</div>
	<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
	<a href="<?php echo site_url('Databarang/index') ?>" class="btn btn-default">Cancel</a>
</form>
</div>
</div>
<?php $this->load->view('Templates/Admin/Footer'); ?>