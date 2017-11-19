<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return '<li>
		<a href="'.site_url('Home').'"><i class="fa fa-dashboard"></i> Dashboard</a>
	</li>	
	<li>
			<a href="#"><i class="fa fa-table fa-fw"></i>Table<span class="fa arrow"></span></a>
			<ul class="nav nav-second-level">
				<li>
					<a href="'.site_url('databarang').'">Data Barang</a>
				</li>
				<li>
					<a href="'.site_url('member').'">Member</a>
				</li>
				<li>
					<a href="'.site_url('beli').'">Beli</a>
				</li>
				<li>
					<a href="'.site_url('supplier').'">Supplier</a>
				</li>
				<li>
					<a href="'.site_url('supply').'">Supply</a>
				</li>
			</ul>
		</li>';
	}

