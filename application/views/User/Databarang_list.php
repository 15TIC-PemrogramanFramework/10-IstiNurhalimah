	<?php $this->load->view('Templates/User/Header'); ?>
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
			
		</div>
		<div class="panel panel-blue" style="background:#FFF;">
			<div class="panel-heading">Data Barang</div>
			<div class="panel-body">
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th>Nama Barang</th>
							<th>Harga Barang</th>
							<th>Stok Barang</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($databarang as $key => $row) { ?>
						<tr>
							<td><?php echo $row->nama_barang; ?></td>
							<td><?php echo $row->harga_barang; ?></td>
							<td><?php echo $row->stok_barang; ?></td>
							</tr>
							<?php } ?>
						</tbody> </table>
					</div>
				</div>
				<?php $this->load->view('Templates/User/Footer'); ?>
				<script type="text/javascript">
					$(document).ready(function() {
						$('#example').DataTable();
					} );
				</script>