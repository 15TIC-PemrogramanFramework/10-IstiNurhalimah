<?php $this->load->view('Templates/User/Header'); ?>
<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
	<div class="page-header pull-left">
		<div class="page-title">
			Beli</div>
		</div>
		<ol class="breadcrumb page-breadcrumb pull-right">
			<li><i class="fa fa-table "></i>&nbsp;<a href="Home.php">Table</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
			<li class="hidden"><a href="#">Beli</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
			<li class="active">Beli</li>
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
	<div class="panel panel-blue" style="background:#FFF;">
		<div class="panel-heading">Beli</div>
		<div class="panel-body">
			<form action="<?php echo $aksi; ?>" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label>Nama Barang</label>
					<input type="text" name="nama_barang" class="form-control" placeholder="Masukkan nama barang"
					required value="<?php echo $nama_barang; ?>">	
				</div>
				<div class="form-group">
					<label>Nama Member</label>
					<input type="text" name="nama_member" class="form-control" required value="<?php echo $this->session->userdata('nama_member'); ?>"/>	
				</div>
				<div class="form-group">
					<label>Jumlah Beli</label>
					<input type="text" name="jumlah_beli" class="form-control" placeholder="Masukkan jumlah beli"
					required value="<?php echo $jumlah_beli; ?>">	
				</div>
				<input type="hidden" name="id_beli" value="<?php echo $id_beli; ?>" />
				<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
				<a href="<?php echo site_url('Beli/indexmember') ?>" class="btn btn-default">Cancel</a>
			</form>
		</div>
	</div>
	<?php $this->load->view('Templates/User/Footer'); ?>