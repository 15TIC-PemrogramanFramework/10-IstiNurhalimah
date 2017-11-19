<?php 
/**
* 
*/
class Supply extends CI_Controller
{
	var $limit=10;
	var $offset=10;
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Supply_model');
		$this->load->helper(array('url'));
	}

	function index($page=NULL,$offset='',$key=NULL)
	{
		//print_r($this->prodi_model->ambil_data());
		$data['supply'] = $this->Supply_model->ambil_data();
		$this->load->view('Admin/Supply_list',$data);
	}

	function tambah()
	{
		$data = array(
			'aksi' 				=> site_url('Supply/tambah_aksi'),
			'id_supply' 		=> set_value('id_supply'),
			'nama_supplier' 	=> set_value('nama_supplier'),
			'nama_barang'		=> set_value('nama_barang'),
			'stok_barang'		=> set_value('stok_barang'),
			'button' 			=> 'Tambah'
			);
		$this->load->view('Admin/Supply_form',$data);
	}

	function tambah_aksi()
	{
                $data = array(
                'id_supply' 		=> $this->input->post('id_supply'),
				'nama_supplier' 	=> $this->input->post('nama_supplier'),
				'nama_barang' 		=> $this->input->post('nama_barang'),
				'stok_barang' 		=> $this->input->post('stok_barang')                 
                );
                $this->Supply_model->tambah_data($data); //akses model untuk menyimpan ke database
                $this->session->set_flashdata("supplier", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Insert data berhasil !!</div></div>");
                redirect('supply'); //jika berhasil maka akan ditampilkan view upload
        }

	function delete($id)
	{
		$this->Supplier_model->hapus_data($id);
		$this->session->set_flashdata("supplier", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
                redirect('supply');
	}

	function update($id)
	{
		$supply = $this->Supply_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('Supply/update_aksi'),
			'id_supply' 		=> set_value('id_supply',$supply->id_supply),
			'nama_supplier' 	=> set_value('nama_supplier',$supply->nama_supplier),
			'nama_barang'		=> set_value('nama_barang',$supply->nama_barang),
			'stok_barang'		=> set_value('stok_barang',$supply->stok_barang),
			'button' 			=> 'Update'
			);
		$this->load->view('Admin/Supply_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'id_supply' 		=> $this->input->post('id_supply'),
			'nama_supplier' 	=> $this->input->post('nama_supplier'),
			'nama_barang' 		=> $this->input->post('nama_barang'),
			'stok_barang' 		=> $this->input->post('stok_barang')
			);	
		$id_supply = $this->input->post('id_supply');
		$this->Supply_model->edit_data($id_supply,$data);
		$this->session->set_flashdata("supplier", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
                redirect('supply');
	}
}

 ?>