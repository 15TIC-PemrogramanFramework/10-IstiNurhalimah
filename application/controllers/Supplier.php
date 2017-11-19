<?php 
/**
* 
*/
class Supplier extends CI_Controller
{
	var $limit=10;
	var $offset=10;
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Supplier_model');
		$this->load->helper(array('url'));
	}

	function index($page=NULL,$offset='',$key=NULL)
	{
		//print_r($this->prodi_model->ambil_data());
		$data['supplier'] = $this->Supplier_model->ambil_data();
		$this->load->view('Admin/Supplier_list',$data);
	}

	function tambah()
	{
		$data = array(
			'aksi' 				=> site_url('Supplier/tambah_aksi'),
			'nama_supplier' 	=> set_value('nama_supplier'),
			'alamat_supplier' 	=> set_value('alamat_supplier'),
			'notelp_supplier'	=> set_value('notelp_supplier'),
			'button' 			=> 'Tambah'
			);
		$this->load->view('Admin/Supplier_form',$data);
	}

	function tambah_aksi()
	{
                $data = array(
                'nama_supplier' 	=> $this->input->post('nama_supplier'),
				'alamat_supplier' 	=> $this->input->post('alamat_supplier'),
				'notelp_supplier' 	=> $this->input->post('notelp_supplier')              
                );
                $this->Supplier_model->tambah_data($data); //akses model untuk menyimpan ke database
                $this->session->set_flashdata("supply", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Insert data berhasil !!</div></div>");
                redirect('supplier'); //jika berhasil maka akan ditampilkan view upload
        }

	function delete($id)
	{
		$this->Supplier_model->hapus_data($id);
		$this->session->set_flashdata("supply", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
                redirect('supplier');
	}

	function update($id)
	{
		$databarang = $this->Supplier_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('Supplier/update_aksi'),
			'nama_supplier' 	=> set_value('nama_supplier',$databarang->nama_supplier),
			'alamat_supplier'	=> set_value('alamat_supplier',$databarang->alamat_supplier),
			'notelp_supplier'	=> set_value('notelp_supplier',$databarang->notelp_supplier),
			'button' 			=> 'Update'
			);
		$this->load->view('Admin/Supplier_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'nama_supplier' 		=> $this->input->post('nama_supplier'),
			'alamat_supplier' 		=> $this->input->post('alamat_supplier'),
			'notelp_supplier' 		=> $this->input->post('notelp_supplier')
			);	
		$nama_supplier = $this->input->post('nama_supplier');
		$this->Supplier_model->edit_data($nama_supplier,$data);
		$this->session->set_flashdata("supply", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
                redirect('supplier');
	}
}

 ?>