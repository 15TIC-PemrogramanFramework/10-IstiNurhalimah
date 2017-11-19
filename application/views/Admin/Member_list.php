	<?php $this->load->view('Templates/Admin/Header'); ?> <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
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
				<?=$this->session->flashdata('beli')?>
			</div></div></div>
			<div class="panel panel-blue" style="background:#FFF;">
				<div class="panel-heading">Data Barang</div>
				<div class="panel-body">
					<table class="table table-hover table-bordered">
						<thead>
							<tr>
								<th>Nama Member</th>
								<th>Password Member</th>
								<th>Alamat Member</th>
								<th>No Telp Member</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($member as $key => $row) { ?>
							<tr>
								<td><?php echo $row->nama_member; ?></td>
								<td><?php echo $row->password_member; ?></td>
								<td><?php echo $row->alamat_member; ?></td>
								<td><?php echo $row->notelp_member; ?></td>
								<td>
									<?php echo anchor(site_url('Member/update/'.$row->nama_member),
										'<i class="fa fa-pencil-square" aria-hidden="true"></i>',
										'class="btn btn-warning"'); ?>
									<?php echo anchor(site_url('Member/delete/'.$row->nama_member),
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