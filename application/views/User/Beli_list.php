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
				<?=$this->session->flashdata('beli')?>
				<?php echo anchor(site_url('Beli/tambah'),
					'<i class="fa fa-plus-circle">
				</i> Tambah data', 'class="btn btn-primary"'); ?>
			</div>
		</div>
	</div>
	<div class="panel panel-blue" style="background:#FFF;">
		<div class="panel-heading">Data Beli</div>
		<div class="panel-body">
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th>ID Beli</th>
						<th>Nama Barang</th>
						<th>Nama Member</th>
						<th>Jumlah Beli</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($beli as $key => $value) { ?>
					<tr>
						<td><?php echo $value->id_beli; ?></td>
						<td><?php echo $value->nama_barang; ?></td>
						<td><?php echo $value->nama_member; ?></td>
						<td><?php echo $value->jumlah_beli; ?></td>	
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<?php $this->load->view('Templates/User/Footer'); ?>
				<script type="text/javascript">
					$(document).ready(function() {
						$('#example').DataTable();
					} );
				</script>