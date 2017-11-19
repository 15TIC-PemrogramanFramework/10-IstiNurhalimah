<?php $this->load->view('Templates/Admin/Header'); ?>
<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
	<div class="page-header pull-left">
		<div class="page-title">
			Member</div>
		</div>
		<ol class="breadcrumb page-breadcrumb pull-right">
			<li><i class="fa fa-table "></i>&nbsp;<a href="Home.php">Table</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
			<li class="hidden"><a href="#">Member</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
			<li class="active">Member</li>
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
		<div class="panel-heading">Member</div>
		<div class="panel-body">
			<table class="table table-hover table-bordered">
				<thead>
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
			<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
			<a href="<?php echo site_url('Member/index')?>" class="btn btn-default">Cancel</a>
		</form>
	</div>
</div>
</div>
<?php $this->load->view('Templates/Admin/Footer'); ?>