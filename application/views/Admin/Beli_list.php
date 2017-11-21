<?php $this->load->view('Templates/Admin/Header'); ?>
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
	<div class="panel panel-blue" style="background:#FFF;">
		<div class="panel-heading">Data Beli</div>
		<div class="panel-body">
			<table class="table table-hover table-bordered">
				<thead>
					<tr>
						<th>ID Beli</th>
						<th>Nama Member</th>
						<th>Nama Barang</th>
						<th>Jumlah Beli</th>
						<th style="width: 96px">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($beli as $key => $row) { ?>
					<tr>
						<td><?php echo $row->id_beli; ?></td>
						<td><?php echo $row->nama_member; ?></td>
						<td><?php echo $row->nama_barang; ?></td>
						<td><?php echo $row->jumlah_beli; ?></td>
						<td>
							<?php echo anchor(site_url('Beli/delete/'.$row->id_beli),
								'<i class="fa fa-trash-o" aria-hidden="true"></i>',
								'class="btn btn-danger"'); ?>
							</td>
						</tr>
						<?php } ?>
					</tbody></table>
				</div>
			</div>
			<?php $this->load->view('Templates/Admin/Footer'); ?>
			<script type="text/javascript">
				$(document).ready(function() {
					$('#example').DataTable();
				} );
			</script>
